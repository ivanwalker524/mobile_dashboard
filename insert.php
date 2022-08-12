<?php
$server="localhost";
$username="root";
$password="";
$dbname="mobile";
$trans= mysqli_connect($server,$username,$password,$dbname);
if(isset($_POST['login'])){
    if(!empty($_POST['usersname']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['confirmpas'])){
        $username=$_POST['usersname'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $confirmpas=$_POST['confirmpas'];
        $hashed = password_hash($password,PASSWORD_DEFAULT);
        if($password != $confirmpas){
            echo "Password doesn't match <br>";
        }else{
            $query="INSERT INTO phone(usersname,email,password) values('$username','$email','$hashed')";
            $start= mysqli_query($trans,$query) or die(mysqli_error($trans));
            if($start){
                echo "All Entered Successefully";
            } else
                echo "Form doesn't submit";
        }
    }
}
       
        
session_start();
if(isset($_POST['usersname'])){
         $usersname=$_POST['usersname'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $confirmpas=$_POST['confirmpas'];
}