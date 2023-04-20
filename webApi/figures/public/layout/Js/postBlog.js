const form = document.forms[0];
const btnPreview = document.querySelector('#preview');
const btnPost = document.querySelector('#post');

const TitlePReview = document.querySelector('#title-preview');
const contentPReview = document.querySelector('.container-preview');

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
        TitlePReview.innerHTML = values[1];
        contentPReview.innerHTML = values[3];
        console.log(values[3]);
    });
    isCehck.check = true;
    console.log(isCehck.check)
    }
}
function submit(){
    return true;
}

