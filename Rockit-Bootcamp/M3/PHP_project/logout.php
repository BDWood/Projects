<?php
require_once "initialize.php";


$user_login = new UserLogin();

if ($user_login->isLogged()) {
    $user_login->logout();
    header('refresh:3; url=index.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Logout</title>
</head>
<body>
    <span>You are being logged out.</span>
    <p></p>
</body>
</html>