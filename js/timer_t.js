function startTime(){
    var today = new Date();
    var h=today.getHours();
    var m=today.getMinutes();
    var s=today.getSeconds();

// adding zero to number < 10
    h=addZero(h);
    m=addZero(m);
    s=addZero(s);

    document.getElementById('tmr').innerHTML = h + ":" + m + ":" + s;
    t=setTimeout('startTime()', 500);
}

function addZero(z){
    if(z<10){
        z = "0" + z;
    }
    return z;
}