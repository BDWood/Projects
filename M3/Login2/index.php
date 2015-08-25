<?php
require_once 'initialize.php';
$error_manager = new ErrorManager();
$validator = new Validator();
$pass_valid = new PasswordValidator();
$user_valid = new UsernameValidator();
$user_login = new UserLogin();

if ($user_login->isLogged) {
    header('Location: account.php');
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!$user_valid->isValid($_POST['username'])) {
        return $error_manager->addError('userError', 'Invalid Username');
    }
    if (!$pass_valid->isValid($_POST['password'])) {
        return $error_manager->addError('passError', 'Invalid Password');
    }
    if (!$error_manager->hasErrors()) {
        $user_login->startSession($_POST['username']);
        header('Location: account.php');
    }

}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="index.php" method="POST">

        <div>
            <label>Username:</label>
            <input type="text" name="username" value="">
            <?php if ($error_manager->getError('userError')) ?><span class="error">Error Message Here</span>            
        </div>

        <div>
            <label>Password:</label>
            <input type="password" name="password" value="">
            <?php if ($error_manager->getError('passError')) {?>
            <span class="error">Error Message Here</span>
            <?php
            }
            ?>            
        </div>

        <button>Login</button>

    </form>
</body>
</html>