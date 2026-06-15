<?php
require_once 'libs/router/router.php';
require_once 'app/controllers/album-api.controller.php';
require_once 'app/controllers/artista-api.controller.php';


$router = new Router();

// ALBUMES
$router->addRoute('album', 'GET', 'AlbumApiController', 'getAlbums');
$router->addRoute('album/:id', 'GET', 'AlbumApiController', 'getAlbumById');
$router->addRoute('album/:id', 'DELETE', 'AlbumApiController', 'removeAlbum');
$router->addRoute('album', 'POST', 'AlbumApiController', 'insertAlbum');
$router->addRoute('album/:id', 'PUT', 'AlbumApiController', 'updateAlbum');
$router->addRoute('album/:id', 'PATCH', 'AlbumApiController', 'patchAlbum');


//ARTISTA
$router->addRoute('artista', 'GET', 'ArtistaApiController', 'getArtistas');
$router->addRoute('artista/:id', 'GET', 'ArtistaApiController', 'getArtistaById');
$router->addRoute('artista/:id', 'DELETE', 'ArtistaApiController', 'removeArtista');
$router->addRoute('artista', 'POST', 'ArtistaApiController', 'insertArtista');
$router->addRoute('artista/:id', 'PUT', 'ArtistaApiController', 'updateArtista');
$router->addRoute('artista/:id', 'PATCH', 'ArtistaApiController', 'patchArtista');

$router->route($_GET["resource"], $_SERVER['REQUEST_METHOD']);


