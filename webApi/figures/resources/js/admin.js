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

modelClick(btnEdit, modelProduct,"showModel");

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
};
// for(let i = 0; i< btnEdit.length ; i++){
//   btnEdit[i].addEventListener('click',function(e){
//     var EditForm = document.forms['Edit-form'];
//     EditForm.EditName.value = btnEdit[i].getAttribute('value');
//     console.log(btnEdit[i].getAttribute('value'))
//     console.log(EditForm);
//     e.preventDefault();
//     console.log('here is btn-edit ' + i);
//     document.getElementById('model').classList.add('showModel');
//   })
// }
// window.onclick = function(e){
//   if(e.target === document.querySelector('#model')){
//     document.querySelector('#model').classList.remove('showModel');
//   }
// }

// document.querySelector('#model').addEventListener('click',function(){
//   this.classList.remove('showModel');
// })
