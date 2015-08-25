<?php


class UserLogin {

    public $username;

    public function startSession($username){
        $_SESSION['username'] = $username;
    }

    public function isLogged() {
         return isset($_SESSION['username']);
    }

    public function logout() {
        unset($_SESSION['username']);
        session_destroy();
    }

    public function getUsername() {
        return $_SESSION['username'];
    }

}

// session_start();



// $userLogin = new UserLogin;

// $userLogin->startSession('davesmith');
// if ($userLogin->isLogged()) {
//     echo 'Hello ' . $_SESSION['username'] . ' welcome to our page.';
// }

// $userLogin->logout();
// if ($userLogin->isLogged()) {
//     // This would not happen because we're not logged anymore
// }

// echo $userLogin->getUsername();