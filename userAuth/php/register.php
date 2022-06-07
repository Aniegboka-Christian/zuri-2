<?php
if(isset($_POST['submit'])){
    $username = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

registerUser($username, $email, $password);

}

function registerUser($username, $email, $password){
    //save data into the file
    $cdata = $username . " " . $email . " " . $password ;
    $handle = fopen('../storage/users.csv', "w");
    fwrite($handle, $cdata . "\n");
    fclose($handle);
    
    // echo "OKAY";
}
echo "Your registration is successfull";


