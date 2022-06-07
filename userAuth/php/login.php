<?php
session_start();
$_SESSION['email'] = $_POST['email'];
  

if(isset($_POST['submit'])){
	$email = $_POST['email'];//finish this line
    $password = $_POST['password'];//finish this
    

loginUser($email, $password);

}

function loginUser($email, $password){
    /*
        Finish this function to check if username and password 
    from file match that which is passed from the form
    */
     
    $email = $_POST['email'];
    $password = $_POST['password'];
    $handle = fopen("../storage/users.csv", "r");
    $data = fread($handle, filesize("../storage/users.csv"));
    
    if (strstr($data, $email) AND strstr($data, $password)) {
        header('location: ../dashboard.php');
    }else{
        header('location:../forms/login.html');
    }
}

//echo "login successful";
?>

