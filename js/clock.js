function updateclock(){
    var now = new Date();
    var day_name = now.getDay(),
        month_name = now.getMonth(),
        day_num = now.getDate(),
        Year = now.getFullYear(),
        Hour = now.getHours(),
        Minutes = now.getMinutes(),
        Second = now.getSeconds(),
        Periode = "AM"
    ;


    if (Hour == 0){
        Hour = 12;
    };
    if ( Hour > 12){
        Hour = Hour - 12 ;
        Periode = "PM";
    };
    Number.prototype.pad = function(digits){
        for (var n = this.toString() ; n.length < digits ; n = 0 + n);
        return n ;
    };
    
    var months = ["January", "February", "March", "April", "May", "June", "July","August", "September", "October", "November", "December"];
    var Week = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
    var ids = ["dayname" , "month" , "daynum" , "year" , "hour" , "minutes" , "seconds" , "period"];
    var value = [ Week[day_name] , months[month_name] , day_num.pad(2) , Year.pad(2) , Hour.pad(2) , Minutes.pad(2) , Second.pad(2) , Periode ];

    for(var i = 0 ;  i < ids.length ; i++)
    document.getElementById(ids[i]).firstChild.nodeValue = value[i];

};

//////document.getElementById("body").onload = function() {initclock()};


function initclock(){
    updateclock();
    window.setInterval("updateclock()" , 1);
}