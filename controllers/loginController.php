<?php
class loginController{
    public static function index(){
        include 'database/database.php';
        include 'middleware/login-user.php';
        include 'views/layouts/header/header.php';
        include 'views/login/login.php';
        include 'views/layouts/footer/footer.php';
    }
}
?>