<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
//    public function validationEmail(Request $request)
//    {
//        // Lấy dữ liệu Email từ URL
//        $email = $request->email;
//        $isEmail = true;
//        // Kiểm tra validate email theo hàm mặc định thư viện PHP
//        if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
//            $isEmail = false;
//        }
//
//        return view('backend.user.list', compact('isEmail'));
//
//    }
    public function showFormLogin()
    {

        return view('auth.login');
    }

    public function login(Request $request)
    {
        $data = $request->only('email', 'password');
        if (Auth::attempt($data)){
            return redirect()->route('notes.index');
        }else {
            $message = 'Đăng nhập không thành công. Tên người dùng hoặc mật khẩu không đúng.';
            $request->session()->flash('login-fail', $message);
            //Quay trở lại trang đăng nhập
            return redirect()->route('admin.showFormLogin');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin.login');
    }

    public function showFormRegister()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $data = $request->only('name', 'email', 'password');
        $data['password'] = Hash::make($request->password);
        $user = User::query()->create($data);
        return redirect()->route('admin.login');


    }
}
