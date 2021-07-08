var btnOpenResign = document.getElementById("header-btn-page-resign");
var pageResign = document.getElementById("header-register-page");
var btnCloseResign = document.getElementById("header-register-form-btn-close");

//Su kien
btnOpenResign.addEventListener("click", function(){
    pageResign.style.display = "flex";
});
pageResign.addEventListener("click", function(item){
    if(item.target === item.currentTarget){
        pageResign.style.display = "none";
    }
});
btnCloseResign.addEventListener("click", function(){
    pageResign.style.display = "none";
});