function dataSpin() {
    var dataSpin  = [];
    $.ajax({
        url: "dataSpin",
        type: "get",
        async:false
    }).done(function (data) {
      
        data.map(datas => {
            datas.img = `/layout/Img/${datas.img}`
            dataSpin.push(datas)
        })
    });
    return dataSpin;
}
var dataSpins = dataSpin();

var n;
var num = document.getElementsByClassName("spinNum");
var startAngle = 0;
var arc = Math.PI / (dataSpins.length / 2);
var spinTimeout = null;
var spinArcStart = 10;
var spinTime = 0;
var spinTimeTotal = 0;
var ctx;
var pattern1, pattern2;

var canvas = document.getElementById("canvas");
var ctx = canvas.getContext("2d");

var pt = [];
var t = [];

function init(){
    drawRouletteWheel();
    loadAllGiftUser();
    loadGiftUser();
}
init()

for (let i = 0; i < dataSpins.length; i++) {
    t[i] = new Image();
    t[i].src = dataSpins[i].img;
    function start() {
        pt[i] = ctx.createPattern(t[i], "repeat");
        drawRouletteWheel();
    }

    t[i].onload = start;
}


function drawRouletteWheel() {
    var outsideRadius = 300;
    var textRadius = 160;
    var insideRadius = 10;

    ctx.clearRect(0, 0, 500, 500);

    ctx.strokeStyle = "black";
    ctx.lineWidth = 4;

    ctx.font = "bold 15px Oswald, Arial";
    for (var i = 0; i < dataSpins.length; i++) {
        var angle = startAngle + i * arc;
        ctx.fillStyle = pt[i];
        ctx.beginPath();
        ctx.arc(450, 300, outsideRadius, angle, angle + arc, false);
        ctx.arc(450, 300, insideRadius, angle + arc, angle, true);
        ctx.stroke();
        ctx.fill();
        ctx.save();
        ctx.shadowOffsetX = 1;
        ctx.shadowOffsetY = 1;
        ctx.shadowBlur = -1;
        ctx.shadowColor = "rgb(220,220,220)";
        ctx.fillStyle = "black";
        ctx.fillStyle = "break-word";
        ctx.translate(
            450 + Math.cos(angle + arc / 2) * textRadius,
            300 + Math.sin(angle + arc / 2) * textRadius
        );
        ctx.rotate(angle + arc / 2 + Math.PI / 2);
        var text = dataSpins[i].nameGift;
        ctx.fillText(text, -ctx.measureText(text).width / 2, -70);
        ctx.restore();
    }
}

function luckySpin() {
    var spin = 0;
    $.ajax({
        url: "luckySpin",
        type: "get",
        async: false,
    }).done(function (data) {
        spin = data.remaining;
    });
    return spin;
}
function subSpin(spin) {
    $.ajax({
        url: "subSpin",
        type: "get",
        data: {
            n: --spin,
        },
    });
}
function gif(name, details) {
    $.ajax({
        url: "gift",
        type: "get",
        data: {
            name: name,
            details: details,
        },
    }).done(function (data) {
        console.log(data);
    });
}

n = luckySpin() ? luckySpin() : 0;

num[0].innerHTML = "bạn đang có " + n + " lượt ";

function check() {
    if (luckySpin() > 0 && luckySpin() != undefined) {
        spin();
        subSpin(n);
    }
    n--;
    num[0].innerHTML =
        luckySpin() != undefined
            ? "bạn đang có " + n + " lượt"
            : "bạn hết lượt";
    if (n < 0) {
        num[0].innerHTML = "bạn đã hết lượt";
        window.alert("số lượt không đủ vui lòng nạp thêm tiền");
    }
}

function spin() {
    spinAngleStart = Math.random() * 10 + 10;
    spinTime = 0;
    spinTimeTotal = Math.random() * 3 + 4 * 1000;
    rotateWheel();
}

function loadGiftUser(){
    $.ajax({
        url: "showGift",
        type: "get"
    }).done(function (data) {
        var html = '';
    
    if(data){
        html = data.map((datas,index) => {
            var htmls = ` <li class="table-row">
            <div class="col col-1" data-label="STT" >${index + 1}</div>
            <div class="col col-2"  data-label="Name">${datas.fullname}</div>
            <div class="col col-3"   data-label="Date">${datas.dateGet}</div>
            <div class="col col-4"  data-label="Details">${datas.details === null ? 'Chúc bạn may mắn' : datas.details}</div>
          </li>`
          return htmls;
        })
    }
        $('.showw').html(html);
    });
}

function loadAllGiftUser(){
    $.ajax({
        url: "showAllGift",
        type: "get"
    }).done(function (data) {
        var html = '';
      
    if(data != null){
        html = data.map((datas,index) => {
            var htmls = ` <li class="table-row">
            <div class="col col-1"  data-label="STT">${index + 1}</div>
            <div class="col col-2"  data-label="Name">${datas.fullname}</div>
            <div class="col col-3"  data-label="NameGitf">${datas.nameGift}</div>
            <div class="col col-4"  data-label="Date">${datas.dateGet}</div>
          </li>`
          return htmls;
        })
    }
        $('.shows').html(html);
    });
}
function rotateWheel() {
    spinTime += 5;
    if (spinTime >= spinTimeTotal) {
        stopRotateWheel();
        return;
    }
    var spinAngle =
        spinAngleStart - easeOut(spinTime, 0, spinAngleStart, spinTimeTotal);
    startAngle += (spinAngle * Math.PI) / 180;
    drawRouletteWheel();
    spinTimeout = setTimeout("rotateWheel()", 10);
}

function stopRotateWheel() {
    clearTimeout(spinTimeout);
    var degrees = (startAngle * 180) / Math.PI + 90;
    var arcd = (arc * 180) / Math.PI;
    var index = Math.floor((360 - (degrees % 360)) / arcd);
    ctx.save();
    ctx.font = "bold 30px Helvetica, Arial";
    var text = dataSpins[index].nameGift;
    gif(text,  dataSpins[index].codes);
    window.alert(text);
    loadGiftUser()
    // ctx.fillText(text, 250 - ctx.measureText(text).width / 2, 250 + 10);
    ctx.restore();
}

function easeOut(t, b, c, d) {
    var ts = (t /= d) * t;
    var tc = ts * t;
    return b + c * (tc + -3 * ts + 3 * t);
}



