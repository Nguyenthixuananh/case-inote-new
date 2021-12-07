$(document).ready(function () {

    $("#search-input").on("input", search);

    function search() {
        let searchValue = $(this).val();
        console.log(searchValue)
        let result = [];
        for (let i = 0; i < data.length; i++) {
            if (data[i].title.toLowerCase().includes(searchValue.toLowerCase())){

                result.push(data[i]);
            }
        }
        displayNote(result);
    }



    function displayNote(notes) {
        let html = "";
        for (let i = 0; i < notes.length; i++) {
            // document.write(response[i].title+"<br>");
            html += `<tr>
                        <th scope="row">${notes[i].id}</th>
                        <td>${notes[i].name}</td>
                        <td>${notes[i].description}</td>
                        <td>${notes[i].category}</td>
                    </tr>`
        }
        $(".list-note").html(html);
    }
});
