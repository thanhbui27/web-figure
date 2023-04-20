$(".addToCart").on("click", function () {
    var quantity = $("#quantity").val();
    var id_pro = $(".id_pros").val();
    var url =
        "../addCartD?action=addCartD&id=" + id_pro + "&quantity=" + quantity;
    $("#superman").attr("href", url);
});
$(document).on("submit", "form", function (event) {
    event.preventDefault();
    var url = $(this).attr("action");
    var data = CKEDITOR.instances.editor.getData();
    var id_user = $("#id_user").val();
    var id_pro = $(".id_pros").val();
    $.ajax({
        url: url,
        type: "get",
        data: {
            id_user: id_user,
            id_pro: id_pro,
            content: data,
        },
    })
        .done(function (datass) {
            $(".show-comment").html(datass);
        })
        .fail(function (jqXHR, textStatus, errorThrown) {
            console.log(textStatus + ": " + errorThrown);
        });
});
$("body").on("click", ".close", function () {
    $(".model-motife").css({ transform: "scale(0)", visibility: "hidden" });
});
$("body").on("click", "#yes", function () {
    var quantity = $("#quantity").val();
    var id_pro = $(".id_pros").val();
    var url =
        "../addCartD?action=addCartD&id=" + id_pro + "&quantity=" + quantity;
    location.href = url;
});
$("body").on("click", ".fa-stars", function () {
    var index = $(this).index() + 1;
    var id_pro = $(".id_pros").val();
    $.ajax({
        url: "../RateProduct",
        type: "get",
        data: {
            index: index,
            id_pro: id_pro,
        },
    })
        .done(function (datass) {
            if (!datass.error) {
                var html = "";
                for (let i = 1; i <= 5; i++) {
                    if (i <= Math.floor(datass.tb)) {
                        html += `<i class="fas fa-star fa-stars  vang"></i>`;
                    } else {
                        html += `<i class="fas fa-star fa-stars"></i>`;
                    }
                }
                var countRate = `<span><b class="countRate">${datass.tb.toFixed(
                    2
                )} (${datass.count})</b> </span>`;
                html += countRate;
                $(".product-raiting").html(html);
            } else {
                var html = `<div class="model-motife">
                  <div class="model-body">
                    <div class="card-motife">
                      <div class="model-glass"></div>
                      <div class="close">X</div>
                      <div class="sub">-</div>
                      <div class="motife"></div>
                      <div class="model-content">
                        <h2 id="nameCr">${datass.error}</h2>
                      </div>
                      <div class="model-btn">
                        <button class="yes" id="yes">Có</button>
                        <button class="no" id="no">Không</button>
                      </div>
                    </div>
                  </div>
                </div>`;
                $(".show-motife").html(html);
                $(".model-motife").css({
                    transform: "scale(1)",
                    visibility: "visible",
                });
                console.log(datass);
            }
        })
        .fail(function (jqXHR, textStatus, errorThrown) {
            console.log(textStatus + ": " + errorThrown);
        });
});
