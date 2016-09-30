<!doctype html>
<html>
<head>
	<title>Registration Form </title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


<script type="text/javascript">
function validate()
{
	var message='';
	var Firstname = document.forms["myform"]["Firstname"].value;	
	
	if( Firstname.trim() == '')
	{
		message = "\nENTER Firstname";
		document.myform.Firstname.focus() ;
		//console.log(message)
	}

	var MiddleName = document.forms["myform"]["MiddleName"].value;
	if(MiddleName.trim() == '')
	{
		message += "\nENTER MiddleName";
		document.myform.MiddleName.focus() ;
	}
	var Lastname = document.forms["myform"]["Lastname"].value;
	if(Lastname.trim() == '')
	{
		message += "\nENTER Lastname";
		document.myform.Lastname.focus() ;
	}

	var Username = document.forms["myform"]["Username"].value;
	if(Username.trim() == '')
	{
		message += "\nENTER Username";
		document.myform.Username.focus() ;
	}
	var Email = document.forms["myform"]["Email"].value;
	if(Email.trim() == '')
	{
		message += "\nENTER Email";
	}

	else{
		var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
		 
		 if( !re.test(Email)){
			message +=  '\nInvalid email address <br>';
		 }

		 //console.log(message);
		//document.myform.Email.focus() ;
		//return false;
	}

	var Gender = document.forms["myform"]["gender"].value;
	if(Gender.trim() == '')
	{
		message += " click gender";
		document.myform.gender.focus() ;
	}
	var Address = document.forms["myform"]["Address"].value;
	if(Address.trim() == '')
	{
		message += "\nENTER Address";
		document.myform.Address.focus() ;
	}

	var Country = document.forms["myform"]["Country"].value;
	if(Country.trim() == '')
	{
		message += "\nSelect Country";
		//document.myform.Country.focus();
	}

	var password = document.forms["myform"]["pwd"].value;
	if(password.trim() == '')
	{
		message += "\nENTER PWD";
		//document.myform.pwd.focus();
	}*/	

	if( message !='' )
	{	
		//console.log(document.getElementById('error'));
		document.getElementById('error').innerHTML= message;
		document.getElementById('error').style.display='block';
		return false;
	}

	return true;

}
  
</script>


</head>
<body>
	<h1> Registration Form</h1>

<div class="container">
<div id="error" class="alert alert-danger" style="display:none;"></div>
<form  name="myform" method="post" onsubmit="return validate();">
<div class="form-group">
	   <label>FirstName:</label>
		 <input type="text" name"Firstname" id="Firstname" placeholder="JOE" class="form-control"><br>
		 <label>Middle Name:</label>
		 <input type="text" name"MiddleName"  value="" id="MiddleName" placeholder="Bhadur" class="form-control"><br>
	  <label>LastName:</label>
		 <input type="text" name="Lastname" value="" id="Lastname" placeholder="Matin" class="form-control"><br>
	 <label>Username:</label>
		 <input type="text" name="Username" value="" id="username" placeholder="Joe Bhaduur Matin" class="form-control"><br>
	   <label> Email:</label><br>
		 <input type="text" name="Email" value="" id="Email" placeholder="shrestha@gmail.com"class="form-control"><br>
	   <label> Gender </label><br>
	<input type="radio" name="gender" value="male">Male
	<input type="radio" name="gender" value="female">Female<br>
	 <label>Address</label>
	  <input type ="text" name="Address" value="" placeholder="Kathmandu" class="form-control">
	<label>Country</label>
	  <select name="Country" class="form-control">
		<option value="NP">NEPAL </option>
		<option value="CHI">CHINA</option>
		<option value="JP">JAPAN</option>
		<option value="US">America</option>
	  </select> 

 <h2>SIGN UP </h2>
		<label>Username:</label>
		 <input type="text" name="Username" value="" id="Username" placeholder="Joe Bhaduur Matin" class="form-control">
		 <label>Password:</label>
		 <input type="text" name="pwd"  value="" Placeholder="********" class="form-control">

  <input type="submit"  name="submitForm"  Value"submit"   >
</div>
</form>
</div>

</body>
</html>