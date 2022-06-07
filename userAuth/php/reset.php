<?php
if(isset($_POST['submit'])){
    $email =$_POST['email']; //complete this;
    $password =$_POST['password']; //complete this;

    resetPassword($email, $password);
}

function resetPassword($email, $password){
    //open file and check if the username exist inside
    //if it does, replace the password
    $email =$_POST['email'];
    $password =$_POST['password'];
    $handle = fopen("../storage/users.csv", "r");
    $data = fread($handle, filesize("../storage/users.csv"));
    if (!strstr($data, $email)) {
    	
         echo "email doesnt exist" . "<br>";
         fclose($handle);
    }else{
    	$handle = fopen("../storage/users.csv", "w");
    	$newdata = substr_replace($data, $password, '26' , '8');
    	fwrite($handle, $newdata);
    	echo "password reset is successful";
    	fclose($handle);

    	
    }
}
 

