const form = document.forms[0];
const btnPreview = document.querySelector('#preview');
const btnPost = document.querySelector('#post');

const TitlePReview = document.querySelector('#title-preview');
const contentPReview = document.querySelector('.container-preview');

// const like = document.querySelectorAll('.like');
// const dislike = document.querySelectorAll('.dislike');

const checkLikes = document.querySelectorAll('.fa-thumbs-up');
const checkDislikes = document.querySelectorAll('.fa-thumbs-down');

const displayRep = document.querySelectorAll('.rep');
const repDisplay =  document.querySelectorAll('.rep-comment');


const isCehck = {
    check : false
}
function btnClick() {
    if(isCehck.check === false){
        form.addEventListener("submit", event =>  {
        event.preventDefault();
        new FormData(form);
      });
      form.addEventListener("formdata", event => {
        const data = event.formData;
        const values = [...data.values()];
        TitlePReview.innerHTML = values[0];
         contentPReview.innerHTML = values[2];
         console.log(values[2]);
    });
    isCehck.check = true;
    console.log(isCehck.check)
    }
}
function submit(){
    return true;
}

// HTMLElement.prototype.hasClass = function(classs) {
//     var classes = this.className.split(" ");
//    for(let i = 0 ; i<classes.length ; i++){
//        if(classes[i] === classs){
//            return true;
//        }
//    }
//     return false;
// };

// checkLike(like,checkLikes,checkDislikes);
// checkDisLike(dislike,checkLikes,checkDislikes);

// function checkLike (clikchandle,checkLike,checkDislike){
//     for(let i = 0 ; i < clikchandle.length ; i++){
//         clikchandle[i].addEventListener('click', () => {
//             if(checkLike[i].hasClass('hasLike')){
//                 checkLike[i].classList.remove('hasLike');
//             }else{
//                 if(checkDislike[i].hasClass('hasLike')){
//                     checkDislike[i].classList.remove('hasLike');
//                     checkLike[i].classList.add('hasLike');
//                 }else{
//                     checkLike[i].classList.add('hasLike');
//                 }
//             }
//         })
//     }
// }
// function checkDisLike (clikchandle,checkLike,checkDislike){
//     for(let i = 0 ; i < clikchandle.length ; i++){
//         clikchandle[i].addEventListener('click', () => {
//             if(checkDislike[i].hasClass('hasLike')){
//                 checkDislike[i].classList.remove('hasLike');
//             }else{
//                 if(checkLike[i].hasClass('hasLike')){
//                     checkLike[i].classList.remove('hasLike');
//                     checkDislike[i].classList.add('hasLike');
//                 }else{
//                     checkDislike[i].classList.add('hasLike');

//                 }
//             }
//         })
//     }
// }


