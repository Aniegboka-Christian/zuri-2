<?php

session_start();

?>
<?php
function logout(){
    /*
Check if the existing user has a session
if it does
destroy the session and redirect to login page

*/
if ($_SESSION['email'] == true) {
	session_destroy();
	header('location: ../index.php');
}
}
logout();

//echo "HANDLE THIS PAGE";
