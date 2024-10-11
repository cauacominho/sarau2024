<?php
session_start();
unset($_SESSION['u_id']);
unset($_SESSION['u_token']);
unset($_SESSION['u_access_level']);
unset($_SESSION['u_user']);
unset($_SESSION['u_name']);
unset($_SESSION['u_email']);
session_destroy();
header("Location: ../../entrar.php");
exit;
