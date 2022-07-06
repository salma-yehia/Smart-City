/// collaps slider navbar
$(document).ready(() => {
    $(".sidebar-btn").click(() => {
        $(".warpper").toggleClass("collapse");
    });
});


////// dark mode
$(".switch").click(() => {
    $("body").toggleClass("dark-mode");
    if ($("body").hasClass("dark-mode")) {
        $(".switch").attr("class", "fas fa-sun");
    } else {
        $("body").removeClass("dark-mode");
        ///$(".switch").attr("class","fas fa-moon");
    };
});

let item = document.querySelectorAll(".sidebar-menu .item");
let menu = document.querySelector(".sidebar-menu");
console.log(item);

$(".sidebar-menu .item").hover(function() {
        $(".sidebar-menu .item").removeClass("active-hover");
        $(this).addClass("active-hover");
        return false;
    },
    function() {
        $(".sidebar-menu .item").removeClass("active-hover");
        ////$(".sidebar-menu .item:first").addClass("active-hover");
    }
);

/*
for (let i=0; i<item.length ; i++){
    item[i].addEventListener("click" , function( ){
        console.log(item[i]);
        item[0].classList.remove("active-hover");
        item[i].classList.add("active-hover");
    });
}

/*
function active_hover(){
    item.forEach((link)=>
    link.classList.remove("active-hover"));
    this.classList.add("active-hover");
};
item.forEach((link)=>
    link.addEventListener("mouseover" , active_hover));
    */