var countDownDate = new Date("Feb 4 , 2025 16:00:00").getTime();

var x = setInterval(function () {
    var now = new Date().getTime();
    var distance = countDownDate - now;

    if (distance < 0) {
        clearInterval(x);
        var infoRegist = document.getElementById("infoRegist");
        if (infoRegist) {
            infoRegist.remove();
        }
    } else {
        var pengumuman = document.getElementById("pengumuman");
        if (pengumuman) {
            pengumuman.remove();
        }
    }
}, 0);
