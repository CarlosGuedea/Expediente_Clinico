<?php
require_once 'vendor/autoload.php';
require 'controllers/loginController.php';
require 'controllers/homeController.php';
require 'controllers/registerController.php';
require 'controllers/ordenesController.php';
require 'controllers/adminController.php';
require 'controllers/sesionController.php';
require 'controllers/stripeController.php';
require 'controllers/historiasController.php';
require 'controllers/vistaHistoriasController.php';
require 'controllers/filtrosController.php';

$dispatcher = FastRoute\simpleDispatcher(function (FastRoute\RouteCollector $r) {

    //Ruta para mostrar el landing page
    $r->addRoute('GET', '/', [homeController::class, 'landing']);

    //Ruta para mostrar la pagina nosotros
    $r->addRoute('GET', '/nosotros', [homeController::class, 'nosotros']);

    //Ruta para mostrar la pagina contacto
    $r->addRoute('GET', '/contacto', [homeController::class, 'contacto']);

    //Ruta para el login
    $r->addRoute(['GET', 'POST'], '/login', [loginController::class, 'index']);

    //Ruta para el registro
    $r->addRoute(['GET', 'POST'], '/registro', [registerController::class, 'index']);

    //Ruta para mostrar las historias clinicas
    $r->addRoute(['GET', 'POST'], '/historias', [historiasController::class, 'index']);

    //Ruta para crear una nueva historia general
    $r->addRoute(['GET', 'POST'], '/nueva-historia-credenciales', [historiasController::class, 'nuevaHistoriaCredenciales']);

    //Ruta para crear una nueva historia general
    $r->addRoute(['GET', 'POST'], '/nueva-historia-general', [historiasController::class, 'nuevaHistoriaGeneral']);

    //Ruta para crear una nueva historia antecedentes
    $r->addRoute(['GET', 'POST'], '/nueva-historia-antecedentes', [historiasController::class, 'nuevaHistoriaAntecedentes']);

    //Ruta para crear una nueva historia de nutricion
    $r->addRoute(['GET', 'POST'], '/nueva-historia-nutricion', [historiasController::class, 'nuevaHistoriaNutricion']);

    //Ruta para crear una nueva historia de psicologia
    $r->addRoute(['GET', 'POST'], '/nueva-historia-psicologia', [historiasController::class, 'nuevaHistoriaPsicologia']);

    //Ruta para crear una nueva historia de familiograma
    $r->addRoute(['GET', 'POST'], '/historia-familiograma', [historiasController::class, 'nuevaHistoriaFamiliograma']);

    //Ruta para crear una nueva historia de medicina
    $r->addRoute(['GET', 'POST'], '/nueva-historia-medicina', [historiasController::class, 'nuevaHistoriaMedicina']);

    //Ruta para crear una nueva historia de medicina
    $r->addRoute(['GET', 'POST'], '/nueva-historia-clinicos', [historiasController::class, 'nuevaHistoriaClinicos']);

     //Ruta para crear una nueva historia de medicina
     $r->addRoute(['GET', 'POST'], '/historia-seguimiento', [historiasController::class, 'nuevaHistoriaSeguimiento']);

    //Ruta para la vista detalle de medicina
    $r->addRoute(['GET', 'POST'], '/vista-Generales', [vistaHistoriasController::class, 'vistaGenerales']);

    //Ruta para la vista detalle de medicina
    $r->addRoute(['GET', 'POST'], '/vista-Medicina', [vistaHistoriasController::class, 'vistaMedicina']);

    //Ruta para la vista detalle de nutricion
    $r->addRoute(['GET', 'POST'], '/vista-Nutrici%C3%B3n', [vistaHistoriasController::class, 'vistaNutricion']);

     //Ruta para la vista detalle de medicina
     $r->addRoute(['GET', 'POST'], '/vista-Psicologia', [vistaHistoriasController::class, 'vistaPsicologia']);

     //Ruta para la vista detalle de medicina
     $r->addRoute(['GET', 'POST'], '/vista-Seguimiento', [vistaHistoriasController::class, 'vistaSeguimiento']);

    //Ruta para cerrar la sesión
    $r->addRoute(['GET'], '/cerrar-sesion', [sesionController::class, 'cerrarSesion']);

    //Ruta para la vista detalle de medicina
    $r->addRoute(['GET', 'POST'], '/formulario-filtros', [filtrosController::class, 'index']);

    //Ruta para la vista detalle de medicina
    $r->addRoute(['GET', 'POST'], '/vista-filtros', [filtrosController::class, 'Vista']);



    $r->addRoute(['GET', 'POST'], '/paquetes', [homeController::class, 'paquetes']);

    $r->addRoute(['GET', 'POST'], '/ordenes', [ordenesController::class, 'index']);

    $r->addRoute(['GET', 'POST'], '/nueva-orden', [ordenesController::class, 'nuevaOrden']);

    $r->addRoute(['GET', 'POST'], '/detalle-orden/{id:\d+}', [ordenesController::class, 'detalleOrden']);

    $r->addRoute(['GET', 'POST'], '/nuevo-orden-detalle/{id:\d+}', [ordenesController::class, 'nuevoDetalleOrden']);

    $r->addRoute(['GET', 'POST'], '/cambiar-contrasena', [sesionController::class, 'cambiarContrasena']);

    $r->addRoute(['GET', 'POST'], '/admin', [adminController::class, 'login']);

    $r->addRoute(['GET', 'POST'], '/AdminPanel', [adminController::class, 'panel']);

    $r->addRoute(['GET', 'POST'], '/AdminPanel/ordenes/{pagina:\d+}', [adminController::class, 'panelOrdenes']);

    $r->addRoute(['GET', 'POST'], '/AdminPanel/usuarios/{pagina:\d+}', [adminController::class, 'panelUsuarios']);

    $r->addRoute(['GET', 'POST'], '/AdminPanel/busquedas', [adminController::class, 'panelBusquedas']);

    $r->addRoute(['GET', 'POST'], '/AdminPanel/solicitudes/{pagina:\d+}', [adminController::class, 'panelSolicitudes']);

    $r->addRoute(['GET', 'POST'], '/admin-orden-detalle/{id:\d+}', [ordenesController::class, 'adminOrdenDetalle']);

    $r->addRoute(['GET', 'POST'], '/stripe-basic', [stripeController::class, 'stripeBasic']);

    $r->addRoute(['GET', 'POST'], '/stripe-standard', [stripeController::class, 'stripeStandard']);

    $r->addRoute(['GET', 'POST'], '/stripe-premium', [stripeController::class, 'stripePremium']);

    $r->addRoute(['GET', 'POST'], '/success', [stripeController::class, 'success']);

    $r->addRoute(['GET', 'POST'], '/cancel', [stripeController::class, 'cancel']);
});

$httpMethod = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];

$routeInfo = $dispatcher->dispatch($httpMethod, $uri);

switch ($routeInfo[0]) {
    case FastRoute\Dispatcher::NOT_FOUND:
        echo 'Página no encontrada';
        break;
    case FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
        echo 'Método no permitido';
        break;
    case FastRoute\Dispatcher::FOUND:
        $handler = $routeInfo[1];
        $vars = $routeInfo[2];
        call_user_func_array($handler, $vars);
        break;
}
