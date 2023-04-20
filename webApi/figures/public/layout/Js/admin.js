var dropdown = document.querySelectorAll(".sub-btn");
var mdiv = document.querySelectorAll(".sub-menu");
var currentHeight = [];

var rote = document.querySelectorAll(".dropdown");
for (let i = 0; i < mdiv.length; i++) {
    currentHeight.push(mdiv[i].offsetHeight);
    mdiv[i].style.height = "0";
}

const checkDropdown = {
    slideOpen: true,
    heightChecked: false,
};
for (let i = 0; i < dropdown.length; i++) {
    dropdown[i].addEventListener("click", () => {
        var heightChecked = false;
        var initHeight = 0;
        slideToggle();
        function slideToggle() {
            if (!heightChecked) {
                initHeight = currentHeight[i];
                heightChecked = true;
            }
            if (!checkDropdown.slideOpen) {
                checkDropdown.slideOpen = true;
                mdiv[i].style.height = "0px";
                rote[i].classList.remove("rote");
                console.log("up");
            } else {
                mdiv[i].style.height = initHeight + "px";
                rote[i].classList.toggle("rote");
                checkDropdown.slideOpen = false;
                console.log("down");
            }
        }
    });
}

var btnEdit = document.querySelectorAll(".btn-edit");
var modelProduct = document.getElementById("model");


function modelClick(btnClick, model, ClassAdd) {
    for (let i = 0; i < btnClick.length; i++) {
        btnClick[i].addEventListener("click", function (e) {
            e.preventDefault();
            console.log("here is btn-edit " + i);
            model.classList.add(ClassAdd);
        });
    }
}

var btnEditCate = document.querySelectorAll(".edit-cate");
var modelCate = document.getElementById("model-cate");

modelClick(btnEditCate, modelCate, "showModel");

var btnInfo = document.querySelectorAll(".btn-info");
var modelInfo = document.getElementById("model-customer");

modelClick(btnInfo, modelInfo, "showModel");

var ModelOrder = document.querySelector('#model-order');
var ModeliImg = document.querySelector('#model-img');

var btnprice = document.querySelectorAll(".edit-price");
var modelprice = document.getElementById("model-price");

modelClick(btnprice, modelprice, "showModel");

var btnheight = document.querySelectorAll(".edit-height");
var modelheight = document.getElementById("model-height");

modelClick(btnheight, modelheight, "showModel");

window.onclick = function (e) {
    if (e.target === modelProduct) {
        modelProduct.classList.remove("showModel");
    }
    if (e.target === modelCate) {
        modelCate.classList.remove("showModel");
    }
    if (e.target === modelInfo) {
        modelInfo.classList.remove("showModel");
    }
    if(e.target === ModelOrder){
        ModelOrder.classList.remove("showModel");

    }
    if(e.target === ModeliImg){
        ModeliImg.classList.remove("showModel");
    }
    if (e.target === modelprice) {
        modelprice.classList.remove("showModel");
    }
    if (e.target === modelheight) {
        modelheight.classList.remove("showModel");
    }
};

var x, i, j, l, ll, selElmnt, a, b, c;
x = document.getElementsByClassName("custom-select");
l = x.length;
for (i = 0; i < l; i++) {
    selElmnt = x[i].getElementsByTagName("select")[0];
    ll = selElmnt.length;
    a = document.createElement("DIV");
    a.setAttribute("class", "select-selected");
    a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
    x[i].appendChild(a);
    b = document.createElement("DIV");
    b.setAttribute("class", "select-items select-hide");
    for (j = 1; j < ll; j++) {

        c = document.createElement("DIV");
        c.innerHTML = selElmnt.options[j].innerHTML;
        c.addEventListener("click", function(e) {

            var y, i, k, s, h, sl, yl;
            s = this.parentNode.parentNode.getElementsByTagName("select")[0];
            sl = s.length;
            h = this.parentNode.previousSibling;
            for (i = 0; i < sl; i++) {
                if (s.options[i].innerHTML == this.innerHTML) {
                    s.selectedIndex = i;
                    h.innerHTML = this.innerHTML;
                    y = this.parentNode.getElementsByClassName("same-as-selected");
                    yl = y.length;
                    for (k = 0; k < yl; k++) {
                        y[k].removeAttribute("class");
                    }
                    this.setAttribute("class", "same-as-selected");
                    break;
                }
            }
            h.click();
        });
        b.appendChild(c);
    }
    x[i].appendChild(b);
    a.addEventListener("click", function(e) {

        e.stopPropagation();
        closeAllSelect(this);
        this.nextSibling.classList.toggle("select-hide");
        this.classList.toggle("select-arrow-active");
    });
}

function closeAllSelect(elmnt) {

    var x, y, i, xl, yl, arrNo = [];
    x = document.getElementsByClassName("select-items");
    y = document.getElementsByClassName("select-selected");
    xl = x.length;
    yl = y.length;
    for (i = 0; i < yl; i++) {
        if (elmnt == y[i]) {
            arrNo.push(i)
        } else {
            y[i].classList.remove("select-arrow-active");
        }
    }
    for (i = 0; i < xl; i++) {
        if (arrNo.indexOf(i)) {
            x[i].classList.add("select-hide");
        }
    }
}

document.addEventListener("click", closeAllSelect);
