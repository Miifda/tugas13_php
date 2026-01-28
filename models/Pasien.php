<?php
require_once 'config/database.php';

class Pasien {
    private $db;

    public function __construct() {
        $this->db = Database::connect();
    }

    public function all() {
        $stmt = $this->db->query("SELECT * FROM pasien ORDER BY id DESC");
        return $stmt->fetchAll(); // Ubah ke fetchAll() untuk return array
    }

    public function count() {
        $stmt = $this->db->query("SELECT COUNT(*) as total FROM pasien");
        return $stmt->fetch()['total'];
    }

    public function create($data) {
        return $this->db->prepare(
            "INSERT INTO pasien (nama,umur,jenis_kelamin,alamat)
             VALUES (:nama,:umur,:jk,:alamat)"
        )->execute($data);
    }

    public function find($id) {
        $stmt = $this->db->prepare("SELECT * FROM pasien WHERE id=:id");
        $stmt->execute(['id'=>$id]);
        return $stmt->fetch();
    }

    public function update($data) {
        return $this->db->prepare(
            "UPDATE pasien SET nama=:nama, umur=:umur,
             jenis_kelamin=:jk, alamat=:alamat WHERE id=:id"
        )->execute($data);
    }

    public function delete($id) {
        return $this->db->prepare(
            "DELETE FROM pasien WHERE id=:id"
        )->execute(['id'=>$id]);
    }
}