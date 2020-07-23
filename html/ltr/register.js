
function checkForm(form)
  {
    if(form.username.value == "") {
      alert("Error: Username cannot be blank!");
      form.username.focus();
      return false;
    }
    re = /^\w+$/;
    if(!re.test(form.username.value)) {
      alert("Error: Username must contain only letters, numbers and underscores!");
      form.username.focus();
      return false;
    }
    
    if(form.userpassword.value != "" && form.userpassword.value == form.confirmpassword.value) {
      if(form.userpassword.value.length < 6) {
        alert("Error: Password must contain at least six characters!");
        form.userpassword.focus();
        return false;
      }
      if(form.userpassword.value == form.username.value) {
        alert("Error: Password must be different from Username!");
        form.pwd1.focus();
        return false;
      }
      re = /[0-9]/;
      if(!re.test(form.userpassword.value)) {
        alert("Error: password must contain at least one number (0-9)!");
        form.userpassword.focus();
        return false;
      }
      re = /[a-z]/;
      if(!re.test(form.userpassword.value)) {
        alert("Error: password must contain at least one lowercase letter (a-z)!");
        form.userpassword.focus();
        return false;
      }
      re = /[A-Z]/;
      if(!re.test(form.userpassword.value)) {
        alert("Error: password must contain at least one uppercase letter (A-Z)!");
        form.userpassword.focus();
        return false;
      }
    } else {
      alert("Error: Please check that you've entered and confirmed your password!");
      form.userpassword.focus();
      return false;
    }
     return true;
	  
	  
	 
     if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(form.useremail.value))
  {
    return (true);
  }
    alert("You have entered an invalid email address!");
	  form.useremail.focus();
    return (false);
    if(form.workplatform.value == "") {
      alert("Error: work platform cannot be blank!");
      form.workplatform.focus();
      return false;
    }
    re = /^\w+$/;
    if(!re.test(form.workplatform.value)) {
      alert("Error: workplatform must contain only letters !");
      form.workplatform.focus();
      return false;
    }

	  
	  
}