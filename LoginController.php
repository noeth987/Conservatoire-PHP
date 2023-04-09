<?php
require_once 'user.php';

class LoginController {
    public function index() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $mail = $_POST['mail'];
            $password = $_POST['password'];

            $user = User::findBymailAndPassword($mail, $password);

            if ($user) {
                $_SESSION['user'] = $user;
                header('Location: index.php?page=home');
                exit;
            } else {
                $error = 'mail or password is incorrect';
            }
        }

        require_once 'login.php';
    }

    public function logout() {
        unset($_SESSION['user']);
        header('Location: index.php?page=login');
        exit;
    }
}
