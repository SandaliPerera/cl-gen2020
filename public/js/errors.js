
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
    else if(password != confirmPassword){
        document.getElementById("msg").style.visibility = 'visible';
        document.getElementById("msg").innerHTML ="Passwords not matched";
        return false;

    }else{ 

    }  

}

function validate(username,password) {
    
    var anUpperCase = /[A-Z]/;
    var aLowerCase = /[a-z]/; 
    var aNumber = /[0-9]/;
    var position = username.indexOf("/");

    if (username.length < 10 || username.search(anUpperCase) == -1 || position != 4 || username.match(aLowerCase))   
    { 
        document.getElementById("msg").style.visibility = 'visible';
        document.getElementById("msg").innerHTML ="Invalid Username";
        return false;
        
    } else if (password.length < 7 || password.search(anUpperCase) == -1 ||   password.search (aNumber) == -1)  
    { 
        document.getElementById("msg").style.visibility = 'visible';
        document.getElementById("msg").innerHTML ="Invalid Password";
        return false;
        
    }  
  }
  

  function validateReset(username,email) {
    
    var anUpperCase = /[A-Z]/;
    var aLowerCase = /[a-z]/; 
    var aNumber = /[0-9]/;
    var position = username.indexOf("/");
    var pattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;

    if (username.length < 10 || username.search(anUpperCase) == -1 || position != 4 || username.match(aLowerCase))   
    { 
        document.getElementById("msg").style.visibility = 'visible';
        document.getElementById("msg").innerHTML ="Invalid Username Format";
        return false;
        
    } else  if (email.match(pattern))
    {
        return true;
    }else{
        document.getElementById("msg").style.visibility = 'visible';
        document.getElementById("msg").innerHTML ="Invalid Email Format";
        return false;
    }
  }