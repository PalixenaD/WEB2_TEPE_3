<?php
require_once __DIR__ . '/../models/albumes-api.model.php';

class AlbumApiController {
  private $model;

  public function  __construct() {
        $this->model = new AlbumModel();
    }

  public function getAlbums($req, $res) {
    $sort = $_GET['sort'] ?? 'nombre_album';
    $order = $_GET['order'] ?? 'asc';

    $allowedSorts = [
    'id_album',
    'nombre_album',
    'genero',
    'fecha_lanzamiento',
    'duracion_minutos',
    'cantidad_canciones',
    'id_artista'
];

    if (!in_array($sort, $allowedSorts))
    $sort = 'nombre_album';

    if ($order != 'asc' && $order != 'desc')
    $order = 'asc';
    
    $albums = $this->model->getAll($sort, $order);
    return $res->json($albums, 200);
}

  public function updateAlbum($req, $res) {
    $id_album = $req->params->id;
        $album = $this->model->get($id_album);

        if (!$album) {
            return $res->json("El album con el id=$id_album no existe", 404);
        }

        $nombre_album = $req->body->nombre_album ?? null;
        $genero = $req->body->genero ?? null;
        $fecha_lanzamiento = $req->body->fecha_lanzamiento ?? null;
        $duracion_minutos = $req->body->duracion_minutos ?? null;
        $cantidad_canciones = $req->body->cantidad_canciones ?? null;
        $imagen = $req->body->imagen ?? null;
        $id_artista = $req->body->id_artista ?? null;    

        if (empty($nombre_album) || empty($genero) || empty($fecha_lanzamiento) || empty($duracion_minutos) || empty($cantidad_canciones) || empty($imagen) || empty($id_artista)) {
            return $res->json('Falta completar datos', 400);
        }

        $this->model->update($id_album, $nombre_album, $genero, $fecha_lanzamiento, $duracion_minutos, $cantidad_canciones, $imagen, $id_artista);
        
        $album = $this->model->get($id_album);
        return $res->json($album, 200);
    }

   public function getAlbumById($req, $res) {
      $id_album = $req->params->id;
      $album = $this->model->get($id_album);
       if (!$album) {
            return $res->json(
                "El album con id=$id_album no existe",
                404
            );
        }
        return $res->json($album, 200);
    }

  public function insertAlbum($req, $res) {

        $nombre_album = $req->body->nombre_album ?? null;
        $genero = $req->body->genero?? null;
        $fecha_lanzamiento = $req->body->fecha_lanzamiento ?? null;
        $duracion_minutos = $req->body->duracion_minutos ?? null;
        $cantidad_canciones = $req->body->cantidad_canciones ?? null;
        $imagen = $req->body->imagen ?? null;
        $id_artista = $req->body->id_artista ?? null;

        if (empty($nombre_album) || empty($genero) || empty($fecha_lanzamiento) || empty($duracion_minutos) || empty($cantidad_canciones) || empty($imagen) || empty($id_artista)) {
            return $res->json('Falta completar datos', 400);
        }
        

        $id = $this->model->insert(
            $nombre_album,
            $genero,
            $fecha_lanzamiento,
            $duracion_minutos,
            $cantidad_canciones,
            $imagen,
            $id_artista
        );

        if (!$id) {
            return $res->json(
                "Error al insertar",
                500
            );
        }

        $album = $this->model->get($id);

        return $res->json($album, 201);
    }
}
