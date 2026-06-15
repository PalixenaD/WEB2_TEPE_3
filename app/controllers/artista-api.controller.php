<?php

require_once __DIR__ . '/../models/artista-api.model.php';

class ArtistaApiController {

    private $model;

    public function __construct() {
        $this->model = new ArtistaModel();
    }

