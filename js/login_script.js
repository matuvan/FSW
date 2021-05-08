const loginBtn = document.getElementById('login-btn');
loginBtn.addEventListener("click", validLogin);

const toAccount = document.getElementById('myAccount');
toAccount.addEventListener("click", redirectAccount);

function redirectAccount (){
    if (typeof (Storage) !== 'undefined') {
        if (localStorage.getItem("userLogin") === null) {
            window.location.href = "login.html";
        }
        else {
            window.location.href = "logged-in.html"
        }
    }
}
function validLogin() {
    let userLogin = document.getElementById('userLogin').value;
    let userPwd = document.getElementById('userPwd').value;
    if (typeof (Storage) !== 'undefined') {
        if (userPwd == "password") {
            document.getElementById("wrongPwd").innerHTML = '';
            localStorage.setItem("userLogin", userLogin);
            window.location.href = "logged-in.html";
        }
        else {
            document.getElementById("wrongPwd").innerHTML = '<p style="color: red;"> Invalid password!</p>'
            document.getElementById("userLogin").value = '';
            document.getElementById("userPwd").value = '';
        }
    }
}