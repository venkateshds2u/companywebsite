<?php
if (count($_POST))
{
	$count=0;
    $loginData = file('login.txt');
    $accessData = array();
    foreach ($loginData as $line) {
        list($username, $password) = explode(',', $line);
			$accessData[trim($username)] = isset($password) ? trim($password): null;
		}
    $username = isset($_POST['username']) ? $_POST['username'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';
    if (array_key_exists($username, $accessData) && $password == $accessData[$username]) {
        echo "Username and Password is correct";
		header("location: userslist.php?user=".$username);
	
    } else {
		header("location:loginfail.php");
    }
}
?>