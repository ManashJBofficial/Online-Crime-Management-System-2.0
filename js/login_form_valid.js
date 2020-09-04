function valid_login() {
// Make quick references to our fields.

var uname = document.getElementById('uname');
var pass = document.getElementById('pass');


ErrorText="";

				
				if(document.LoginForm.uname.value=="")
				{
					alert("Please enter Username");
					document.LoginForm.uname.focus();
					return false;
				}
				if(document.LoginForm.pass.value=="")
				{
					alert("Please enter your Password");
					document.LoginForm.pass.focus();
					return false;
				}
				
					
					if(ErrorText="")
					{
					Reform.submit();
					}
}