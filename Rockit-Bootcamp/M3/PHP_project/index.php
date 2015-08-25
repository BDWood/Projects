<?php
require_once "initialize.php";

$user_login = new UserLogin();

if ($user_login->isLogged()) {
    header('Location: account.php');
    exit();
}

$pass_valid = new PasswordValidator();
$user_valid = new UsernameValidator();
$error_manager = new ErrorManager();


    
    
if (($_SERVER['REQUEST_METHOD']) == 'POST') {
    if (!$user_valid->isValid($_POST['username'])) {
        $error_manager->addError('UserError', 'Please type a valid Username');
    }
    if (!$pass_valid->isValid($_POST['password'])) {
        $error_manager->addError('PassError', 'Please type a valid Password');
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
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <form action="index.php" method="POST">

        <div>
            <label>Username:</label>
            <input type="text" name="username" value="<?php if (($_SERVER['REQUEST_METHOD']) == 'POST') {
                echo $_POST['username']; 
                }?>">
                <span class="error" style="color: red"> <?php echo $error_manager->getError('UserError')?></span>
                    
                        
        </div>

        <div>
            <label>Password:</label>
            <input type="password" name="password" value="<?php if (($_SERVER['REQUEST_METHOD']) == 'POST') {
                echo $_POST['password'];
                }?>">
            <span class="error" style="color: red"><?php echo $error_manager->getError('PassError')?></span>
                
                        
        </div>

        <button>Login</button>

    </form>
</body>
</html>