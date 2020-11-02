
window.onload = function() {
    document.getElementById("msg").style.visibility = 'hidden';
  };

function CheckPassword(password,confirmPassword) {

    var anUpperCase = /[A-Z]/;
    var aLowerCase = /[a-z]/; 
    var aNumber = /[0-9]/;

    if (password.length < 7 || password.search(anUpperCase) == -1 ||  
    password.search(aLowerCase) == -1 || password.search (aNumber) == -1)  
    { 
        document.getElementById("msg").style.visibility = 'visible';
        document.getElementById("msg").innerHTML ="Invalid Password";
        return false;
    }  
    else if(password != confirm_password){
        document.getElementById("msg").style.visibility = 'visible';
        document.getElementById("msg").innerHTML ="Passwords not matched";
    }else{ 
    }  

}

