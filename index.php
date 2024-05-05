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

$dispatcher = FastRoute\simpleDispatcher(function(FastRoute\RouteCollector $r) {

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

    $r->addRoute(['GET'], '/cerrar-sesion', [sesionController::class, 'cerrarSesion']);
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
