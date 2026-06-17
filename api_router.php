<?php
require_once 'libs/router/router.php';
require_once 'app/controllers/album-api.controller.php';
require_once 'app/controllers/reseña-api.controller.php';


$router = new Router();

$router->addRoute('albums', 'GET', 'AlbumApiController', 'getAlbums');
$router->addRoute('albums/:id', 'GET', 'AlbumApiController', 'getAlbumById');
$router->addRoute('albums', 'POST', 'AlbumApiController', 'insertAlbum');
$router->addRoute('albums/:id', 'PUT', 'AlbumApiController', 'updateAlbum');


$router->addRoute('reseñas', 'GET', 'ReseñaApiController', 'getReseñas');
$router->addRoute('reseñas', 'POST', 'ReseñaApiController', 'insertReseña');

$router->route($_GET["resource"], $_SERVER['REQUEST_METHOD']);


