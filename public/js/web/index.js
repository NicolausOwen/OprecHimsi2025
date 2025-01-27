var countDownDate = new Date("Jan 28, 2025 23:59:59").getTime();
var preCountDownDate = new Date("Jan 16, 2025 23:59:59").getTime();

var preInterval = setInterval(function () {
    var now = new Date().getTime();
    var distance = preCountDownDate - now;

    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    var preCountdownElement = document.getElementById("pre-countdown");
    if (preCountdownElement) {
        preCountdownElement.innerHTML = days + "D " + hours + "H " + minutes + "M " + seconds + "S";
    }

    if (distance < 0) {
        clearInterval(preInterval);

        if (preCountdownElement) {
            preCountdownElement.innerHTML = "EXPIRED";
        }

        var open = document.querySelectorAll(".pre-registration");
        open.forEach((e) => {
            e.remove();
        });
    }
}, 1000);

var x = setInterval(function () {
    var now = new Date().getTime();
    var distance = countDownDate - now;
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor(
        (distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
    );
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    document.getElementById("countdown").innerHTML =
        days + "D  " + hours + "H  " + minutes + "M " + seconds + "S ";

    if (distance < 0) {
        clearInterval(x);
        document.getElementById("countdown").innerHTML = "EXPIRED";
        var open = document.querySelectorAll(".registration-open");
        open.forEach((e) => {
            e.remove();
        });
    } else {
        var closed = document.querySelectorAll(".registration-closed");
        if (closed) {
            closed.forEach((e) => {
                e.remove();
            });
        }
    }
}, 0);
