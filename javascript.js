
// menu bar 
var menu = document.querySelector('.list1');
var accordion = document.querySelector('.accordionfirst');
function menufunction(){
accordion.classList.toggle('show');
}



// form validation
function validateform() {
    let fullName = document.getElementById('fullName').value;
    let email = document.getElementById('email').value;
    let password = document.getElementById('password').value;
  // let at = email.indexOf('@');
  // let dot = email.indexOf('.')
  
    // name section is here that
    if(fullName == ""){
      alert('please enter your name')
      return false;
    }
  
    if((fullName.length < 2) || (fullName.length > 20)){
      alert('this is to short name')
      return false;
    }
  
    if(!isNaN(fullName)){
      alert('please enter name in characters')
      return false;
    }
  
  
  
  // this is email sectiion is here that
  
    if(email == ""){
      alert('please enter your email')
      return false;
    }
    // if(email.indexOf('@') <= 0){
    //   alert('please enterright position of @')
    //   return false;
    // }
  
    // if((email.charAt('a.length - 4 ') != "0") &&(email.charAt(email.length - 3) != '.') ){
    //   alert('please enterright position 4 of @')
    //   return false;
    // }
    
  
  
  
  // here is passord section 
    if(password == ""){
      alert('please enter your password')
      return false;
    }
  
    
    if((password.length < 5) || (password.length > 20)){
      alert('enter the minimum 5 and maximum 20 words')
      return false;
    }
  
  }
  
  
  



