var width = document.getElementById("slideshow-container").clientWidth;
var imgContainer = document.getElementById("slidelist-container");
var img = document.getElementsByClassName("slide-container");

var nav = document.getElementsByClassName("slidecontrol-navigator");

var index = 0;

//Control slide
function nextSlide(){
    nav[index].style.backgroundColor = "rgba(190, 190, 190, 0.8)";

    if(index < img.length - 1){
        index += 1;
    }else{
        index = 0;
    }

    imgContainer.style.marginLeft = "-" + index * width + "px";
    nav[index].style.backgroundColor = "rgba(255, 255, 255, 0.8)";
}
function backSlide(){
    nav[index].style.backgroundColor = "rgba(190, 190, 190, 0.8)";

    if(index > 0){
        index -= 1;
    }else{
        index = img.length - 1;
    }

    imgContainer.style.marginLeft = "-" + index * width + "px";
    nav[index].style.backgroundColor = "rgba(255, 255, 255, 0.8)";
}
function updateSlide(index){
    nav[this.index].style.backgroundColor = "rgba(190, 190, 190, 0.8)";
    this.index = index;
    imgContainer.style.marginLeft = "-" + index * width + "px";
    nav[index].style.backgroundColor = "rgba(255, 255, 255, 0.8)";
}

//Su kien
document.getElementById("slidecontrol-arrow-left").addEventListener("click", function(){
    backSlide();
});
document.getElementById("slidecontrol-arrow-right").addEventListener("click", function(){
    nextSlide();
});
for(let i = 0; i < nav.length; i++){
    nav[i].addEventListener("click", function(){
        updateSlide(i);
    });
}
//Automatic run slide
setInterval(function(){
    nextSlide();
}, 5000)