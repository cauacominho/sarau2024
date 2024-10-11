<?php

session_start();

require_once "db-config.php";

if (isset($_POST) || (isset($_POST['loginEmail']) || (isset($_POST['loginPassword'])))) {
    header("Location: ../../login.php");
}

$email = $_POST["loginEmail"];
$password = $_POST["loginPassword"];


$sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";

$resultSql = mysqli_query($connect, $sql);

$qtd = $resultSql->num_rows;

if ($qtd == 1) {

    foreach ($resultSql as $linhaSql) {

        $_SESSION['u_id'] = $linhaSql['id'];
        $_SESSION['u_access_level'] = $linhaSql['access_level'];
        $_SESSION['u_user'] = $linhaSql['user'];
        $_SESSION['u_name'] = $linhaSql['name'];
        $_SESSION['u_email'] = $linhaSql['email'];
    }

    header("Location: ../../index.php");
} else {
    header("Location: ../../login.php");
}
