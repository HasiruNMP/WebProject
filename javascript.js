function customerpage() 
	{
    this.close();
  		window.open("customerpage.html");
  	}

function studentlogin() 
	{
    this.close();
  		window.open("login3.html");
  	}
    
function validate() 
    {
      if (document.frm_1.uname.value!="admin")
      {
        alert("Incorrect username !!!");
        document.getElementById('loginpage').action="js_validation.html";
      }
      if (document.frm_1.upassword.value!="admin")
      {
        alert("Incorrect password !!!");
        document.getElementById('loginpage').action="js_validation.html";
      }
    }

function adminlogin() 
  {
    this.close();
      window.open("js_validation.html");
    }

function goback() {
  this.close();
  window.history.back();
}

