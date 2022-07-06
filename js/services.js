let tab_header = document.getElementsByClassName("tab-header")[0];
let tab_indicator = document.getElementsByClassName("tab-indicator")[0];
let tab_body = document.getElementsByClassName("tab-body")[0];
let tabs_pane = tab_header.getElementsByTagName("div");

for (let i = 0; i < tabs_pane.length; i++) {
    tabs_pane[i].addEventListener("click", function() {
        tab_header.getElementsByClassName("active")[0].classList.remove("active");
        tabs_pane[i].classList.add("active");
        tab_body.getElementsByClassName("active")[0].classList.remove("active");
        tab_body.getElementsByTagName("div")[i].classList.add("active");

        tab_indicator.style.left = `calc(calc(100% / 4) * ${i})`;
    });
}

var $scores1 = $("#scores1");
setInterval(function() {
    $scores1.load("serves.php #scores1");
}, 3000);
var $scores2 = $("#scores2");
setInterval(function() {
    $scores2.load("serves.php #scores2");
}, 3000);
var $scores5 = $("#scores5");
setInterval(function() {
    $scores5.load("serves.php #scores5");
}, 3000);
var $scores6 = $("#scores6");
setInterval(function() {
    $scores6.load("serves.php #scores6");
}, 3000);
var $scores7 = $("#scores7");
setInterval(function() {
    $scores7.load("serves.php #scores7");
}, 3000);
var $scores8 = $("#rain");
setInterval(function() {
    $scores8.load("serves.php #rain");
}, 3000);
var $scores9 = $("#scores9");
setInterval(function() {
    $scores9.load("serves.php #scores9");
}, 3000);