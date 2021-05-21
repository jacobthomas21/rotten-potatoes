// Password Verification

var userInput = document.getElementById("psw");
var length = document.getElementById("length");

userInput.onblur = function(){
  document.getElementById("message").style.display = "block";
}

userInput.onblur = function(){
  document.getElementById("message").style.display = "none";
}

userInput.onkeyup = function() {
  if(userInput.value.length >= 8){
    length.classList.remove("invalid");
    length.classList.add("valid");
  }

  else{
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}
