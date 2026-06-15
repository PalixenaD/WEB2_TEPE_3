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
