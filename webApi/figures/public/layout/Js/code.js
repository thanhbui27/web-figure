var menu = document.querySelector(".menu-bar");
var navbar = document.querySelector(".navbar");
menu.addEventListener("click", () => {
    console.log(1);
    navbar.classList.toggle("activeMenuBar");
});

countCart();
banner();
function countCart() {
    $.ajax({
        url: "../showCart",
        type: "get",
    }).done(function (data) {
        $(".countCart").html(data);
    });
}
function banner() {
    $.ajax({
        url: "../route",
        type: "get",
    }).done(function (data) {
        if (!data) {
            $(".bannerB").html("dang tai");
        } else {
            var htmls = "";
            htmls = data[0].map((element) => {
                var html = `<li>
                           <a href="${element.link}">${element.name}</a>
                       </li>`;
                return html;
            });
            $(".bannerB").html(htmls);
            $('.about-us').html(data[1][0].lefts)
            $('.contact').html(data[1][0].betweens)
            $('.Fanpage').html(data[1][0].rights)
        }
    });
}
$("body").on("click", ".cartCt", function (event) {
    event.preventDefault();
    var value = $(this).data("value");
    console.log(value);
    $.ajax({
        url: "actionCart",
        type: "get",
        data: {
            action: "add",
            id: value,
        },
    })
        .done(function (datass) {
            countCart();
            console.log(datass);
        })
        .fail(function (jqXHR, textStatus, errorThrown) {
            console.log(textStatus + ": " + errorThrown);
        });
});
