d = new Date();
y = d.getFullYear();
m = d.getMonth();
da = d.getDate();
day = d.getDay();
h = d.getHours();
min = d.getMinutes();
sec = d.getSeconds();


document.getElementById('date').innerHTML = da + "-" + m + '-' + y + ' ' + h + ':' + min + ':' + sec;