const sign_btn = document.querySelector(".sign-btn");
const login_btn = document.querySelector(".login-btn");
////////////////////////////////////////////////////////
sign_btn.onclick = ()=>{
    window.open("form.php","_self")
}
login_btn.onclick = ()=>{
    window.open("login.php","_self")
}