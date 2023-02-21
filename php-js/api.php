<?php

class Login {

    private $username;
    private $password;

    public function __construct($username, $password) {
        $this->username = $username;
        $this->password = $password;
    }

    public function login() {
        if ($this->username == "admin" && $this->password == "admin") {
            return true;
        } else {
            return false;
        }
    }

}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usr = $_POST['username'];
    $pwd = $_POST['password'];

    $login = new Login($usr, $pwd);
    if ($login->login()) {
        echo "Login successful";
    } else {
        echo "Login failed";
    }
}