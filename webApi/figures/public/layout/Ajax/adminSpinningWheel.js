function dataSpin() {
    var dataSpin = [];
    $.ajax({
        url: "../dataSpin",
        type: "get",
        async: false,
    }).done(function (data) {
        data.map((datas) => {
            datas.img = `/layout/Img/${datas.img}`;
            dataSpin.push(datas);
        });
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

function init() {
    drawRouletteWheel();
    showDataSpin();
}
init();

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
function showDataSpin() {
    var htmt = "";
    html = dataSpins.map((datas, index) => {
        var htmls = ` <li class="table-row">
        <div class="col col-1"  data-label="STT">${index + 1}</div>
        <div class="col col-2"  data-label="Name">${datas.nameGift}</div>
        <div class="col col-2"  data-label="Img"><img style="max-width:85px;" src="${
            datas.img
        }" /></div>
        <div class="col col-4"  data-label="Details">${
            datas.details == null ? "" : datas.details
        }</div>
        <div class="col col-1"  data-label="Code">${datas.codes}</div>
      </li>`;
        return htmls;
    });
    $(".showw").html(html);
}
function check() {
    spin();
}
function spin() {
    spinAngleStart = Math.random() * 10 + 10;
    spinTime = 0;
    spinTimeTotal = Math.random() * 3 + 4 * 1000;
    rotateWheel();
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
    // ctx.fillText(text, 250 - ctx.measureText(text).width / 2, 250 + 10);
    ctx.restore();
}

function easeOut(t, b, c, d) {
    var ts = (t /= d) * t;
    var tc = ts * t;
    return b + c * (tc + -3 * ts + 3 * t);
}

$(`#ImageFile`).change(function (e) {
    var fileName = e.target.files[0].name;
    var url = `../layout/Img/${fileName}`;
    console.log(fileName);
    $('.setImg').html(' <img src="" id="showImage" width="50" height="50" alt="">')
    $(`#showImage`).attr("src", url);
});
function select(a) {
    var value = $("#" + a + " option:selected").val();

    if (value === "voucher") {
        var html = `
        <div class="voucher">
       <div class="createVoucher">
               <div class="createVoucher_c">
                   <div class="createVoucher_button">
                       <button id="newVoucher">Tạo mới voicher</button>
                   </div>
                   <div class="createVouter_screen">
                       <input type="text" id="voucher" name="voucher">
                   </div>
               </div>
               <div class="actionVoucher">
                   <div class="title">
                       <h5>Cài đặt</h5>
                   </div>
                   <div class="setup">
                       <div class="setupDetail">
                           <div class="voucherInput">
                               <label for="name"> <i class="fas fa-file-signature"></i> <b>Tên voucher </b></label>
                               <input type="text" name="name" id="name" required>
                           </div>
                       </div>
                       <div class="setupDate">
                           <div class="voucherInput">
                               <label for="dateStart"> <i class="fas fa-table"></i> <b> Thời gian bắt đầu </b></label>
                               <input type="date" name="dateStart" id="dateStart" required pattern="\d{4}-\d{2}-\d{2}">
                           </div>
                           <div class="voucherInput">
                               <label for="dateEnd"> <i class="fas fa-table"></i> <b> Thời gian kết thúc </b></label>
                               <input type="date" name="dateEnd" id="dateEnd" required pattern="\d{4}-\d{2}-\d{2}">
                           </div>
                       </div>
                       <div class="voucherInput">
                           <div class="discount">
                               <label for="discount"><i class="fas fa-tag"></i> <b>Voucher Giảm giá</b></label>
                               <input type="radio" id="discount" name="action" value="discount" required>
                           </div>
                           <div class="freeship">
                               <label for="freeShip"><i class="fas fa-tag"></i> <b>Voucher miễn phí vận chuyển</b></label>
                               <input type="radio" id="freeShip" name="action" value="freeShip" required>
                           </div>
                       </div>
                       <div class="setupDate">
                           <div class="voucherInput">
                               <label for="sale"><i class="fas fa-money-check-alt"></i> <b>Giảm giá</b></label>
                               <input type="text" name="sale" id="sale" required >
                           </div>
                           <div class="voucherInput">
                               <label for="limit"><i class="fas fa-link"></i></i> <b>Giới hạn</b></label>
                               <input type="text" name="limit" id="limit">
                           </div>
                       </div>                     
                   </div>
               </div>
       </div>
   </div>`;
        $('#checkaction').val('gift');
        $(".create-voucher").html(html);
        const createVoucher = () => {
            return Math.random().toString(36).substr(2, 8).toUpperCase();
        };
        $("#newVoucher").on("click", function (e) {
            e.preventDefault();
            $("#voucher").val(createVoucher());
        });
    }
}
