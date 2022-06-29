<?php
$server="localhost";
$username="root";
$password="";
$dbname="mobile";
$trans= mysqli_connect($server,$username,$password,$dbname);
if(isset($post['login'])){
    if(!empty($_POST['usersname']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['confirmpas'])){
        $username=$_POST['usersname'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $confirmpas=$_POST['confirmpas'];
        $query="INSERT INTO phone(usersname,email,password,confirmpas) values('$usersname','$email','$password','$confirmpas')";
        $start= mysqli_query($trans,$query) or die(mysqli_error($trans));
        if($start){
            echo "All Entered Successefully";
        }
        else
        echo "Doesn't submitted";
    } else{
        echo "All fields needs to be required";
    }
}
session_start();
if(isset($_POST['usersname'])){
         $usersname=$_POST['usersname'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $confirmpas=$_POST['confirmpas'];
}
echo "<br><br>";
echo"User's Name: $usersname <br>";
echo "Email: $email <br>";