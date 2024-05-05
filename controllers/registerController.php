<?php

class RegisterController{
    public static function index(){
        include 'database/database.php';
        include 'middleware/register-user.php';
        include 'views/layouts/header/header.php';
        include 'views/register/register.php';
        include 'views/layouts/footer/footer.php';
    }
}

?>