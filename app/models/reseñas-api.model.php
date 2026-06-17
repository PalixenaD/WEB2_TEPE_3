<?php

class ReseñaModel {
    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;dbname=tpe_web2;charset=utf8', 'root', '');
    }

    public function getAll() {
        $query = $this->db->prepare('SELECT * FROM reseña');
        $query->execute();
        $reseña = $query->fetchAll(PDO::FETCH_OBJ);
        return $reseña;
    }

    public function get($id) {
        $query = $this->db->prepare('SELECT * FROM reseña WHERE id_reseña = ?');
        $query->execute([$id]);
        $reseña = $query->fetch(PDO::FETCH_OBJ);
        return $reseña;
    }

    public function insert($comentario, $puntuacion, $id_album) {
        $query = $this->db->prepare('INSERT INTO `reseña`(`comentario`, `puntuacion`, `id_album`) VALUES (?,?,?)');
        $query->execute([$comentario, $puntuacion, $id_album]);
        return $this->db->lastInsertId();
    }
 
}
