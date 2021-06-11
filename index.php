<?php

//________________________________________________________________________ SETTING UP LIBRARIES 
require "vendor/autoload.php";
require 'menu/index.php';

use Synfony\Component\HttpFoundation\Request;
use Synfony\Component\HttpFoundation\Response;


$request = Request::createFromGlobals();

$nombre = $request->get("nombre");

$response = new JsonResponse([
    'nombre' => $nombre
]);

// Aquí simplemente retornamos el RESPONSE que creamos 
// en el paso anterior
$response->send();