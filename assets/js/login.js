var btnOpenLogin = document.getElementById("header-btn-page-login");
var pageLogin = document.getElementById("header-login-page");
var btnCloseLogin = document.getElementById("header-login-form-btn-close");

//Su kien
btnOpenLogin.addEventListener("click", function(){
    pageLogin.style.display = "flex";
});
pageLogin.addEventListener("click", function(item){
    if(item.target === item.currentTarget){
        pageLogin.style.display = "none";
    }
});
btnCloseLogin.addEventListener("click", function(){
    pageLogin.style.display = "none";
});