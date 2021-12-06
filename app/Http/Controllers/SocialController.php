<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class SocialController extends Controller
{
    //
    public function redirect($provide)
    {
        return Socialite::driver($provide)->redirect();
    }

    public function callback($provider)
    {
        $getInfo =  Socialite::driver($provider)->user();
        $user = $this->findOrCreateUser($getInfo, $provider);
        auth()->login($user);
        return redirect()->route('notes.index');
    }
    function createUser($getInfo,$provider){



        $user = User::where('provider_id', $getInfo->id)->first();



        if (!$user) {

            $user = User::create([

                'name'     => $getInfo->name,

                'email'    => $getInfo->email,

                'provider' => $provider,

                'provider_id' => $getInfo->id

            ]);

        }

        return $user;

    }
    function findOrCreateUser($getInfo, $provider)
    {

//        $user = User::where('provider_id', $getInfo->id)->first();
        $user = User::where('email', $getInfo->email)->first();
//        dd($user);
        if (!$user) {
            $user = User::create([
                'name' => $getInfo->name,
                'email' => $getInfo->email,
                'avatar' => $getInfo->avatar,
                'provider' => $provider,
                'provider_id' => $getInfo->id

            ]);
        } else {
            $user->update([
                'name' => $getInfo->name,
                'avatar' => $getInfo->avatar,
                'provider' => $provider,
                'provider_id' => $getInfo->id
            ]);
        }
        return $user;

//        if (!$user) {
//            $user = User::create([
//                'name'     => $getInfo->name,
//                'email'    => $getInfo->email,
//                'provider' => $provider,
//                'provider_id' => $getInfo->id
//            ]);
//        }
//        return $user;
    }
}
