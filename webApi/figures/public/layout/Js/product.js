function resize() {
  if (window.innerWidth < 1000) {
    console.log("<1000");
  }
  // console.log("height: ", window.innerHeight, "px");
  // console.log("width: ", window.innerWidth, "px");
}
function setLocation(curLoc){
  try {
      history.pushState(null, null, curLoc);
      return false;
  } catch(e) {}
      location.hash = '#' + curLoc;
}
window.onresize = resize;
if (window.innerWidth < 1000) {
  document.querySelector(".sort-price").addEventListener("click", () => {
    document.querySelector(".list-sort-price").classList.toggle("class-vip");
    console.log(1);
  });
  document.querySelector(".sort-kind").addEventListener("click", () => {
    document.querySelector(".list-sort-kind").classList.toggle("class-vip");
    console.log(1);
  });
  document.querySelector(".sort-size").addEventListener("click", () => {
    document.querySelector(".list-sort-size").classList.toggle("class-vip");
    console.log(1);
  });
}

