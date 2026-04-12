<?php
$username = $_POST['username'];
$password = $_POST['password'];

if ($username == "elaine" && $password == "0925") {
    header("Location: form.php");
    exit(); 
} else {
    header("Location: login.php?error=1"); 
    exit();
}
?>