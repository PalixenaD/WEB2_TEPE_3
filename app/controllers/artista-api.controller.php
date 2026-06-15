<?php

require_once __DIR__ . '/../models/artista-api.model.php';

class ArtistaApiController {

    private $model;

    public function __construct() {
        $this->model = new ArtistaModel();
    }


     public function getArtistaById($req, $res) {
      $id_artista = $req->params->id;
      $artista = $this->model->get($id_artista);
       if (!$artista) {
            return $res->json(
                "El artista con id=$id_artista no existe",
                404
            );
        }
        return $res->json($artista, 200);
    }


    public function insertArtista($req, $res) {

        $nombre = $req->body->nombre_artista ?? null;
        $fecha_nacacimiento = $req->body->fecha_nacimiento ?? null;
        $fecha_fallecimiento = $req->body->fecha_fallecimiento ?? null;
        $origen = $req->body->lugar_origen ?? null;
        $imagen = $req->body->imagen ?? null;

        if ( empty($nombre) || empty($fecha_nacimiento) || empty($origen)){
            return $res->json(
                "Faltan completar datos",
                400
            );
        }

        $id = $this->model->insert(
            $nombre,
            $fecha_nacimiento,
            $fecha_fallecimiento,
            $origen,
            $imagen
        );

        if (!$id) {
            return $res->json(
                "Error al insertar",
                500
            );
        }

        $artista = $this->model->get($id);

        return $res->json($artista, 201);
    }


  
    
    
