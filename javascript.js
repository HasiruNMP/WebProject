function home() 
	{
  		window.open("customerpage.html");
  	}

function logout() 
	{
  		window.open("login2.html");
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

function adminlogout() 
  {
      window.open("js_validation.html");
    }
    
