<!DOCTYPE html>
<html>
<head>
	<title>TRIPSTER</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="script.js"></script>
    <link rel="stylesheet" href="style.css" class="rel">
</head>
<body>

<div  class="main" id="success">

<p class="sign" align="center">Register yourself</p>
	
	<form id="fupForm" name="form1" method="post" class="form1"  >
	
			
			<input type="text" class="pass" id="name" placeholder="Name" name="name" onkeypress="return (event.charCode > 64 && 
            event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)">
	
		
			
			<input type="text" class="pass" id="email" placeholder="Email" name="email">


			<input type="text"  onkeypress="return /\d/.test(String.fromCharCode(((event||window.event).which||(event||window.event).which)));"   pattern="[1-9]{1}[0-9]{9}"  minlength="10" maxlength="10" class="pass" id="phone" placeholder="Phone" name="phone">
	

			<select name="department" id="department" class="pass">
				<option value="">Select</option>
				<option value="hotels">HOTELS</option>
				<option value="resorts">RESORTS</option>
				<option value="trips">TRIPS</option>
			</select>
<input type="button" name="save" class="submit" value="Register" id="butsave">
	</form>
</div>


</body>
</html>
  