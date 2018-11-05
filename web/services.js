import * as $ from 'https://code.jquery.com/jquery-3.3.1.min.js';


export function submitClicked() {
    submit();
}


export async function submit() {
    let name = document.getElementById("name_field").value;
    let password = document.getElementById("pass_field").value;
    let email = document.getElementById("email_field").value;
    let zip_code = document.getElementById("zip_field").value;
    let affiliation = document.getElementById("affiliation_field").value;

    if(name === "" || password === "" || email === "" || zip_code === "") {
        return;
    }
    $.post("login.php", {"name": name, "password": password, "email": email, "zip_code": zip_code, "affiliation": affiliation}).done(data => {
        let result = JSON.parse(data);
        if(result.redirect === true) {
            window.location.href="index.php";
        }
    });
}