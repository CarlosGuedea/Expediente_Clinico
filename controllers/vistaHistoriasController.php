<?php
class vistaHistoriasController{
    public static function vistaGenerales(){
        include 'database/database.php';
        include 'middleware/autenticacion-user.php';
        include 'middleware/vista-generales.php';
        include 'views/layouts/header/header.php';
        include 'views/user/vista_generales/vista-generales.php';
        include 'views/layouts/footer/footer.php';
    }

    public static function vistaMedicina(){
        include 'database/database.php';
        include 'middleware/autenticacion-user.php';
        include 'middleware/vista-medicina.php';
        include 'views/layouts/header/header.php';
        include 'views/user/vista_medicina/vista-medicina.php';
        include 'views/layouts/footer/footer.php';
    }

    public static function vistaNutricion(){
        include 'database/database.php';
        include 'middleware/autenticacion-user.php';
        include 'middleware/vista-nutricion.php';
        include 'views/layouts/header/header.php';
        include 'views/user/vista_nutricion/vista-nutricion.php';
        include 'views/layouts/footer/footer.php';
    }

    public static function vistaPsicologia(){
        include 'database/database.php';
        include 'middleware/autenticacion-user.php';
        include 'middleware/vista-psicologia.php';
        include 'views/layouts/header/header.php';
        include 'views/user/vista_psicologia/vista-psicologia.php';
        include 'views/layouts/footer/footer.php';
    }

    public static function vistaSeguimiento(){
        include 'database/database.php';
        include 'middleware/autenticacion-user.php';
        include 'middleware/vista-seguimiento.php';
        include 'views/layouts/header/header.php';
        include 'views/user/vista_seguimiento/vista-seguimiento.php';
        include 'views/layouts/footer/footer.php';
    }

}
?>