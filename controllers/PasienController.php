<?php
require_once 'models/Pasien.php';

class PasienController {
    private $model;

    public function __construct() {
        $this->model = new Pasien();
    }

    public function index() {
        $pasien = $this->model->all();
        $totalPasien = $this->model->count();
        require 'views/pasien/index.php';
    }

    public function create() {
        if ($_POST) {
            $this->model->create([
                'nama'=>$_POST['nama'],
                'umur'=>$_POST['umur'],
                'jk'=>$_POST['jenis_kelamin'],
                'alamat'=>$_POST['alamat']
            ]);
            header("Location:index.php?page=pasien");
            exit;
        }
        require 'views/pasien/create.php';
    }

    public function edit() {
        $data = $this->model->find($_GET['id']);
        if ($_POST) {
            $this->model->update([
                'id'=>$_GET['id'],
                'nama'=>$_POST['nama'],
                'umur'=>$_POST['umur'],
                'jk'=>$_POST['jenis_kelamin'],
                'alamat'=>$_POST['alamat']
            ]);
            header("Location:index.php?page=pasien");
            exit;
        }
        require 'views/pasien/edit.php';
    }

    public function delete() {
        $this->model->delete($_GET['id']);
        header("Location:index.php?page=pasien");
        exit;
    }
}