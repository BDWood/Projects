<?php

class UserLogin {
    public $username;

    public function startSession($username) {
        $_SESSION['username'] = $username;
    }

    public function isLogged() {
        return isset($_SESSION['username']);
    }

    public function logout() {
        session_destroy();
    }

    public function getUsername() {
        return $_SESSION['username'];
    }
}