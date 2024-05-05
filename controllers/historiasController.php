<?php
class historiasController{
    public static function index(){
        include 'database/database.php';
        include 'views/layouts/header/header.php';
        include 'views/user/historias/historias.php';
        include 'views/layouts/footer/footer.php';
    }

}
?>