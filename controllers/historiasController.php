<?php
class historiasController{
    public static function index(){
        include 'database/database.php';
        include 'middleware/autenticacion-user.php';
        include 'middleware/historias-general.php';
        include 'views/layouts/header/header.php';
        include 'views/user/historias/historias.php';
        include 'views/layouts/footer/footer.php';
    }

    public static function nuevaHistoriaCredenciales(){
        include 'database/database.php';
        include 'middleware/autenticacion-user.php';
        include 'middleware/historia-nueva-credenciales.php';
        include 'views/layouts/header/header.php';
        include 'views/user/historia_nueva_credenciales/historia-nueva-credenciales.php';
        include 'views/layouts/footer/footer.php';
    }

    public static function nuevaHistoriaGeneral(){
        include 'database/database.php';
        include 'middleware/autenticacion-user.php';
        include 'middleware/historia-nueva-general.php';
        include 'views/layouts/header/header.php';
        include 'views/user/historia_nueva_general/historia-nueva-general.php';
        include 'views/layouts/footer/footer.php';
    }

    public static function nuevaHistoriaAntecedentes(){
        include 'database/database.php';
        include 'middleware/autenticacion-user.php';
        include 'middleware/historia-nueva-antecedentes.php';
        include 'views/layouts/header/header.php';
        include 'views/user/historia_nueva_antecedentes/historia-nueva-antecedentes.php';
        include 'views/layouts/footer/footer.php';
    }


    public static function nuevaHistoriaNutricion(){
        include 'database/database.php';
        include 'middleware/autenticacion-user.php';
        include 'middleware/historia-nueva-nutricion.php';
        include 'views/layouts/header/header.php';
        include 'views/user/historia_nueva_nutricion/historia-nueva-nutricion.php';
        include 'views/layouts/footer/footer.php';
    }


    public static function nuevaHistoriaPsicologia(){
        include 'database/database.php';
        include 'middleware/autenticacion-user.php';
        include 'middleware/historia-nueva-psicologia.php';
        include 'views/layouts/header/header.php';
        include 'views/user/historia_nueva_psicologia/historia-nueva-psicologia.php';
        include 'views/layouts/footer/footer.php';
    }

    
    public static function nuevaHistoriaFamiliograma(){
        include 'database/database.php';
        include 'middleware/autenticacion-user.php';
        include 'middleware/historia-familiograma.php';
        include 'views/layouts/header/header.php';
        include 'views/user/familiograma/familiograma.php';
        include 'views/layouts/footer/footer.php';
    }


    public static function nuevaHistoriaMedicina(){
        include 'database/database.php';
        include 'middleware/autenticacion-user.php';
        include 'middleware/historia-nueva-medicina.php';
        include 'views/layouts/header/header.php';
        include 'views/user/historia_nueva_medicina/historia-nueva-medicina.php';
        include 'views/layouts/footer/footer.php';
    }


    public static function nuevaHistoriaClinicos(){
        include 'database/database.php';
        include 'middleware/autenticacion-user.php';
        include 'middleware/historia-nueva-clinicos.php';
        include 'views/layouts/header/header.php';
        include 'views/user/historia_nueva_clinicos/historia-nueva-clinicos.php';
        include 'views/layouts/footer/footer.php';
    }

    public static function nuevaHistoriaSeguimiento(){
        include 'database/database.php';
        include 'middleware/autenticacion-user.php';
        include 'middleware/historia-seguimiento.php';
        include 'views/layouts/header/header.php';
        include 'views/user/historia_seguimiento/historia-seguimiento.php';
        include 'views/layouts/footer/footer.php';
    }

}
?>