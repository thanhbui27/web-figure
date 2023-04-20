var signup = document.querySelector("#login-change");
var login = document.querySelector("#Signup-change");

login.addEventListener("click", () => {
    console.log(1);
    document.querySelector('#SignUp').classList.add('display');
    document.querySelector('#login').classList.remove('display');
    document.querySelector('.login-circle').classList.remove('round');
    
  
  })

  signup.addEventListener('click',()=>{
    document.querySelector('#login').classList.add('display');
    document.querySelector('#SignUp').classList.remove('display');
    document.querySelector('.login-circle').classList.add('round');
  })


  function checkpass(){
    var  password = document.getElementById('password').value;
    var passwordanother = document.getElementById('password-another').value;
    if(password === passwordanother){
        return true;
    }else{
        return false;
    }
  }
  
