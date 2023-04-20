function setLocation(curLoc) {
    try {
        history.pushState(null, null, curLoc);
        return false;
    } catch (e) {}
    location.hash = "#" + curLoc;
}

$(".sortSizes").on("click", function () {
    $(".sortSizes").removeClass("activePr");
    $(this).toggleClass("activePr");
    var sizes = $(this).data("size");
    const re = /\s*(?:;|$)\s*/;
    var sizeArr = sizes.split(re);
    sortSizes(sizeArr);
});

function sortSizes(sort) {
    const url = "sortSizes?sizeStart=" + sort[0] + "&sizeEnd=" + sort[1];

    $.ajax({
        type: "GET",
        url: url,
    })
        .done(function (data) {
            location.href = url;
            $("html").html(data);
        })
        .fail(function (jqXHR, textStatus, errorThrown) {
            console.log(textStatus + ": " + errorThrown);
        });
}

$(".sortKinds").on("click", function () {
    $(".sortKinds").removeClass("activePr");
    $(this).toggleClass("activePr");
    var sortKind = $(this).data("kinds");
    sortKinds(sortKind);
});

function sortKinds(sort) {
    const url = "sortKinds?kind=" + sort;
    $.ajax({
        type: "GET",
        url: url,
    })
        .done(function (data) {
            location.href = url;
            $("html").html(data);
        })
        .fail(function (jqXHR, textStatus, errorThrown) {
            console.log(textStatus + ": " + errorThrown);
        });
}

$(".sortPr").on("click", function () {
    $(".sortPr").removeClass("activePr");
    $(this).toggleClass("activePr");
    var sort = $(this).data("sort");
    sorts(sort);
});

function sorts(sort) {
    const url = "sorts?sort=" + sort;
    $.ajax({
        type: "GET",
        url: url,
    })
        .done(function (data) {
            location.href = url;
            $("html").html(data);
        })
        .fail(function (jqXHR, textStatus, errorThrown) {
            console.log(textStatus + ": " + errorThrown);
        });
}

$("body").on("click", ".checkPrice", function () {
    $(".checkPrice").removeClass("activePr");
    $(this).toggleClass("activePr");
    var price = $(this).data("price");
    const re = /\s*(?:;|$)\s*/;
    var data = price.split(re);
    console.log(data);
    var url = "CheckPrice?priceStart=" + data[0] + "&priceEnd=" + data[1];

    $.ajax({
        type: "GET",
        url: url,
    })
        .done(function (data) {
            location.href = url;
            $("html").html(data);
            return false;
        })
        .fail(function (jqXHR, textStatus, errorThrown) {
            console.log(textStatus + ": " + errorThrown);
        });
});

$("body").on("click", ".pagination a", function (e) {
    e.preventDefault();
    var page = $(this).attr("href");
    $.ajax({
        type: "GET",
        url: page,
    })
        .done(function (data) {
            location.href = page;
            $(".product-box-container").html(data);
        })
        .fail(function (jqXHR, textStatus, errorThrown) {
            console.log(textStatus + ": " + errorThrown);
        });
});

// admin

function image(tag, data) {
    var img = document.createElement("IMG");
    img.height = 100;
    img.width = 100;
    img.src = `../layout/Img/${data}`;
    $(tag).html(img);
}
const numberFormat = new Intl.NumberFormat('vi-VN', {
    style: 'currency',
    currency: 'VND',
});

$('body').on('click', '.btn-img', function() {
    $('#model-img').addClass('showModel');
    var ids = $(this).children().data('idi');
    $('.imgId').val(ids);
    $.ajax({
        url: "addProductImg",
        type: "get",
        data: {
            'id': ids,
        }
    }).done(function(data) {
        image('#showImg1', data.img1)
        image('#showImg2', data.img2)
        image('#showImg3', data.img3)
    })
})

$("#searchPr").on("keyup", function() {
    var value = $(this).val();
    $.ajax({
        type: "get",
        url: 'searchProduct',
        data: {
            search: value,
        },
        success: function(data) {
            var html = "";
            data.map((key, index) => {
                html += "<tr>";
                html += "<td>";
                html += index + 1;
                html += "</td>";
                html += "<td>";
                html += key.name_pro;
                html += "</td>";
                html += "<td>";
                html += `<img src="../layout/Img/${key.image}">`;
                html += "</td>";
                html += "<td>";
                html += numberFormat.format(key.price_new === null ? key.price_old : key.price_new);
                html += "</td>";
                html += "<td>";
                html +=
                    key.id_Cate === 1 ?
                    "Action figure" :
                    key.id_Cate === 2 ?
                    "Chibi Figure" :
                    key.id_Cate === 3 ?
                    "Scale figure" :
                    "BB figure";
                html += "</td>";
                html += "<td>";
                html += key.xuatsu;
                html += "</td>";
                html += "<td>";
                html += `<div class='btn-action'>
                                  <div class="delete btn-delete"><a data-idd="${key.id_pro}" href="#">Delete</a></div>
                                  <div class="edit btn-edit"><a data-ide="${key.id_pro}" href="#">Edit</a></div>
                              </div>`;
                html += "</td>";
                html += "<tr>";
            });
            $("tbody").html(html);
        },
    });
});
$("body").on("click", "table .btn-edit", function() {
    var ide = $(this).children().data("ide");
    console.log(1);
    $("#model").addClass("showModel");
    $("#EditID").val(ide);
    $.ajax({
        url: "showInf",
        type: "get",
        data: {
            id: ide,
        },
    }).done(function(data) {
        console.log(data);
        $("#Name").val(data.name_pro);
        $("#priceOld").val(data.price_old);
        $("#priceNew").val(data.price_new);
        $("#size").val(data.chieucao);
        $("#soluong").val(data.soluong);
        $("#madein").val(data.xuatsu);
        $("#category").val(data.id_Cate);
        CKEDITOR.instances["editor"].setData(data.mieuta);
        image("#showImg", data.image);
    });
});
$("body").on("click", "table .btn-delete", function() {
    var idd = $(this).children().data("idd");
    var that = this;
    $.ajax({
        url: "deleteProduct",
        type: "get",
        data: {
            id: idd,
        },
    }).done(function(data) {
        console.log(data);
        $(that).parent().parent().parent().remove();
    });
});
$("body").on("click", ".Thoat", function() {
    $("#model, #model-img").removeClass("showModel");
});