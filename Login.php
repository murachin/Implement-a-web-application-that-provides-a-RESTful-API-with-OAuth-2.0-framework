<html>
	<head>
		<title>Login</title>
	</head>
	<body>
<?php
    echo "Please login with Linkdin";
?>
	 	<form method="post" action="https://www.linkedin.com/uas/oauth2/authorization?response_type=code&client_id=############&redirect_uri=http%3A%2F%2Flocalhost%2Fassine3%2Fhello.php&state=123456&scope=r_basicprofile%20r_emailaddress">
    	<button type="submit">Login with Linkdin</button>
		</form>
	</body>
</html>
