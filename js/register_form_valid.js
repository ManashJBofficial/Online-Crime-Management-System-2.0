function valid() {
// Make quick references to our fields.
var first_name = document.getElementById('first_name');
var last_name = document.getElementById('last_name');
var vid = document.getElementById('vid');
var uname = document.getElementById('uname');
var pass = document.getElementById('pass');
var cpass = document.getElementById('cpass');
var email = document.getElementById('email');
var age = document.getElementById('age');
var city = document.getElementById('city');
var state = document.getElementById('state');
var zcode = document.getElementById('zcode');
var phoneno = document.getElementById('phoneno');
var gender = document.getElementById('gender');

ErrorText="";

				if(document.RegForm.first_name.value=="")
				{
					alert("Please enter user name");
					document.RegForm.first_name.focus();
					return false;
				}
				if(document.RegForm.last_name.value=="")
				{
					alert("Please enter Last name");
					document.RegForm.last_name.focus();
					return false;
				}
				if(document.RegForm.vid.value=="")
				{
					alert("Please enter Victim id");
					document.RegForm.vid.focus();
					return false;
				}
				if(document.RegForm.uname.value=="")
				{
					alert("Please enter Username");
					document.RegForm.uname.focus();
					return false;
				}
				if(document.RegForm.pass.value=="")
				{
					alert("Please enter your Password");
					document.RegForm.pass.focus();
					return false;
				}
				if(document.RegForm.cpass.value=="")
				{
					alert('Please enter Confirmed Password ');
					document.RegForm.cpass.focus();
					return false;
				}
				if(document.RegForm.pass.value!=document.RegForm.cpass.value)
				{
					alert("Password didn't match");
					document.RegForm.cpass.focus();
					return false;
				}
				var first_name = document.getElementById('first_name');
				var re= /^[\w ]+$/;
				if(!re.test(first_name.value)) // Regular Expression for Character entry
				{
				alert("Error: Input to name contains invalid Character!");
				RegForm.first_name.focus();
				return false;
				}
											
				if(document.RegForm.email.value=="")
				{
					alert("Please enter Address");
					document.RegForm.email.focus();
					return false;
				}
				if(document.RegForm.age.value=="")
				{
					alert("Please enter Age");
					document.RegForm.age.focus();
					return false;
				}
				if(document.RegForm.city.value=="")
				{
					alert("Please enter City");
					document.RegForm.city.focus();
					return false;
				}
				if(document.RegForm.state.value=="")
				{
					alert("Please enter State");
					document.RegForm.state.focus();
					return false;
				}
				if(document.RegForm.zcode.value=="")
				{
					alert("Please enter Zip Code");
					document.RegForm.zcode.focus();
					return false;
				}
				if(document.RegForm.phoneno.value=="")
				{
					alert("Please enter Phone no");
					document.RegForm.email.focus();
					return false;
				}
				if(document.RegForm.gender.value=="")
				{
					alert("Please Select Gender");
					document.RegForm.gender.focus();
					return false;
				}

				//var address = document.getElementById('address');
				//var re= /^[\w ]+$/;
				//if(!re.test(address.value)) // Regular Expression for Character entry
				//{
				//alert("Error: Input to address contains invalid Character!");
				//RegForm.address.focus();
				//return false;
				//}
				
				
				
				  var email = document.getElementById('email');
					var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
					if(!filter.test(email.value))
					{
						alert("Please enter a valid Email ID");
						email.focus();
						return false;
					}
				
				
				var age = document.getElementById('age');
					var pattern = /^([0-9]{2})+$/;
					if(!pattern.test(age.value))
					{
						alert("Invalid age");
						return false;
					}
				
				
				var phoneno = document.getElementById('phoneno');
					var pattern = /^([0-9]{10})+$/;
					if(!pattern.test(phoneno.value))
					{
						alert("Invalid Phone no");
						return false;
					}
					
				
					
					if(ErrorText="")
					{
					Reform.submit();
					}
}