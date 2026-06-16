<?php

require_once __DIR__ . '/../models/reseña-api.model.php';

class ReseñaApiController {

    private $model;

    public function __construct() {
        $this->model = new ReseñaModel();
    }


    
    public function insertReseña($req, $res) {

        $comentario = $req->body->comentario ?? null;
        $puntuacion = $req->body->puntuacion ?? null;
        $id_album = $req->body->id_album ?? null;
       

        if ( empty($comentario) || empty($id_album)){
            return $res->json(
                "Faltan completar datos",
                400
            );
        }

        $id = $this->model->insert(
            $comentario,
            $puntuacion,
            $id_album,
        );

        if (!$id) {
            return $res->json(
                "Error al insertar",
                500
            );
        }

        $reseña = $this->model->get($id);

        return $res->json($reseña, 201);
    }


  
    
    
