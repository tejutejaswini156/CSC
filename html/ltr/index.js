function checkForm1(form)
  {
  	if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(form.useremail.value))
  {
    return (true);
  }
    alert("You have entered an invalid email address!");
	  form.useremail.focus();
    return (false);
    if(form.userpassword.value == "") {
      alert("Error: password cannot be blank!");
      form.username.focus();
      return false;
    }
    
}