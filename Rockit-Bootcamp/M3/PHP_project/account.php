<?php
require_once "initialize.php";

$user_login = new UserLogin;


if (!$user_login->isLogged()) {
    header('Location: index.php');
    exit();
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Account</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <p>Hello, <?php echo $user_login->getUsername(); ?> you are logged in.</p>
    <button><a href="logout.php">Logout</a></button>
</body>
</html>