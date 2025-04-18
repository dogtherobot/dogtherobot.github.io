<?php
session_start();

$valid_username = "deniz turer";
$valid_password = "2402";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == $valid_username && $password == $valid_password) {
        $_SESSION['loggedin'] = true;
        header("Location: gizli.php");
    } else {
       Invalid credentials!";
    }
}
?>