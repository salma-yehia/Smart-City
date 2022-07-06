const submit_btn = document.querySelector(".submit");
///////////////////////////////////////////////////////
const progress_text = document.querySelectorAll(".step p");
const progress_check = document.querySelectorAll(".step .check");
const bullet = document.querySelectorAll(".step .bullet");
//////////////////////////////////////////////////////////
const sign_btn = document.querySelector(".sign-btn");
const login_btn = document.querySelector(".login-btn");
const login_form = document.querySelector(".login-div");
const sign_form = document.querySelector(".sign");

submit_btn.addEventListener("click" , function(){
    bullet[3].classList.add("active");
    progress_check[3].classList.add("active");
    progress_text[3].classList.add("active");
    setTimeout(()=>{
        alert("You 're Successfull Signed Up");
        location.reload();
    } ,800);
});
////////////////////////////////////////////////////////
sign_btn.onclick = ()=>{
    window.open("form.php","_self")
}
login_btn.onclick = ()=>{
    window.open("login.php","_self")
}
