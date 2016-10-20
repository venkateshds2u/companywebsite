
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body bgcolor="black">
<div align="center">
<form id='login' action='login1.php' method='post' accept-charset='UTF-8'>
<fieldset >

<legend>Login</legend>
<input type='hidden' name='submitted' id='submitted' value='1'/>
 
<label for='username' >UserName*:</label>
<input type='text' name='username' id='username' maxlength="50" required/>
<br><br>
<label for='password' >Password*:  </label>
<input type='password' name='password' id='password' maxlength="50" required/>
<br><br>
<input type='submit' name='Submit' value='Submit' />

 

</fieldset>
<p style="color:red;">Invalid username and password, please try again</p>
</form>
</div>
</body>



