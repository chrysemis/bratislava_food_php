// Write: Today is Saturday 28th November 2015, time 09:36:56
(function() {
var todayMilli = new Date();
var dayNames = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
var monthNames = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
var day = dayNames[todayMilli.getDay()];
var date = todayMilli.getDate();
var month = monthNames[todayMilli.getMonth()];
var time = todayMilli.toLocaleTimeString();	
var year = todayMilli.getFullYear();
var msg = 'Today is ' +  day + ' ' + date + '<sup>th</sup> ' + month + ' ' + year + ', ';
msg += 'Time ' + time;
var el = document.getElementById('todaysDate');
el.innerHTML = msg;
}());


 





