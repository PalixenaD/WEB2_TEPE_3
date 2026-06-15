<?php

require_once __DIR__ . '/../models/artista-api.model.php';

class ArtistaApiController {

    private $model;

    public function __construct() {
        $this->model = new ArtistaModel();
    }

     public function getArtistas ($req, $res) {
        $status = $req->query->status ?? null;
     if ($status) {
         $artistas = $this->model->getAllByStatus($status);
        } else {
            $artistas = $this->model->getAll();
        }
        return $res->json($artistas, 200);
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
