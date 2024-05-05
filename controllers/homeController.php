<?php
class homeController{
    public static function landing(){
        include 'views/layouts/header/header.php';
        include 'views/landing/landing.php';
        include 'views/layouts/footer/footer.php';
    }


    public static function nosotros(){
        include 'views/layouts/header/header.php';
        include 'views/nosotros/nosotros.php';
        include 'views/layouts/footer/footer.php';
    }


    public static function contacto(){
        include 'views/layouts/header/header.php';
        include 'views/contacto/contacto.php';
        include 'views/layouts/footer/footer.php';
    }

}
?>