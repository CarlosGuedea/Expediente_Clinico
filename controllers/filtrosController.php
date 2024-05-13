<?php
class filtrosController{
    public static function index(){
        include 'database/database.php';
        include 'middleware/autenticacion-user.php';
        include 'views/layouts/header/header.php';
        include 'views/filtros/formulario_filtros/formulario_filtros.php';
        include 'views/layouts/footer/footer.php';
    }

    public static function Vista(){
        include 'database/database.php';
        include 'middleware/autenticacion-user.php';
        include 'middleware/vista-filtros.php';
        include 'views/layouts/header/header.php';
        include 'views/filtros/vista_filtros/vista_filtros.php';
        include 'views/layouts/footer/footer.php';
    }
}
?>