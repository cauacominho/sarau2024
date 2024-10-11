<?php

session_start();

require_once "./db-config.php";

$code = $_POST["codeAccess"];

$sql = "SELECT * FROM users WHERE code = '$code'";
$result = mysqli_query($connect, $sql);

if ($result->num_rows == 1) {
    $linhaSql = $result->fetch_assoc();

    $_SESSION['u_id'] = $linhaSql['id'];
    $_SESSION['u_name'] = $linhaSql['name'];
    $_SESSION['u_access_level'] = $linhaSql['access_level'];

    header("Location: ../../inscritos.php");
    exit();
} else {
    header("Location: ../../entrar.php?pw=error"); // Error for password
    exit();
}
