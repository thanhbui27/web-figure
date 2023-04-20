var listLi = document.querySelectorAll(".list-sort");
var listLiPrice = document.querySelectorAll(".list-sort-price");
var listLiKind = document.querySelectorAll(".list-sort-kind");
var listLiSize = document.querySelectorAll(".list-sort-size");
var checkActiveAZ = document.querySelectorAll("span.check-sort");
var checkActiveprice = document.querySelectorAll("span.check-price");
var checkActivesize = document.querySelectorAll("span.check-size");
var checkActivekind = document.querySelectorAll("span.check-kind");
var getElementLi, getElementLiPrice, getElementLiKind, getElementLiSize;
var num = 0;

var checkActive = (Element, checkActives) => {
  for (let i = 0; i < Element.length; i++) {
    Element[i].addEventListener("click", () => {
      const icon = `<i class="fas fa-check"></i>`;
      checkActives[i].innerHTML = icon;
      if (num === 1) {
        for (let j = 0; j < checkActives.length; j++) {
          checkActives[j].innerHTML = "";
        }
        num = 0;
      } else {
        num++;
      }
    });
  }
};
getElementLi = listLi[0]
  .getElementsByTagName("ul")[0]
  .getElementsByTagName("li");
checkActive(getElementLi, checkActiveAZ);

getElementLiPrice = listLiPrice[0]
  .getElementsByTagName("ul")[0]
  .getElementsByTagName("li");
checkActive(getElementLiPrice, checkActiveprice);

getElementLiKind = listLiKind[0]
  .getElementsByTagName("ul")[0]
  .getElementsByTagName("li");
checkActive(getElementLiKind, checkActivekind);

getElementLiSize = listLiSize[0]
  .getElementsByTagName("ul")[0]
  .getElementsByTagName("li");
checkActive(getElementLiSize, checkActivesize);

function resize() {
  if (window.innerWidth < 1000) {
    console.log(window.innerWidth)
  }
  // console.log("height: ", window.innerHeight, "px");
  // console.log("width: ", window.innerWidth, "px");
}

window.onresize = resize;
if (window.innerWidth < 1000) {
  document.querySelector(".sort-price").addEventListener("click", () => {
    document.querySelector(".list-sort-price").classList.toggle("class-vip");
    console.log(1);
  });
  document.querySelector(".sort-kind").addEventListener("click", () => {
    document.querySelector(".list-sort-kind").classList.toggle("class-vip");
    console.log(2);
  });
  document.querySelector(".sort-size").addEventListener("click", () => {
    document.querySelector(".list-sort-size").classList.toggle("class-vip");
    console.log(3);
  });
}
