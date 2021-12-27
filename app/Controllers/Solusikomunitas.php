<?php

namespace App\Controllers;

use App\Models\komunitasModel;
use App\Models\komunitasDokModel;

class Solusikomunitas extends BaseController
{

    protected $komunitas;
    protected $komunitas_dok;
    public function __construct()
    {
        $this->komunitas = new komunitasModel();
        $this->komunitas_dok = new komunitasDokModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Solusi Bisnis Syariah',
            'komunitas' => $this->komunitas->findAll(),
            'komunitas_dok_desa' => $this->komunitas_dok->getDok(1),
            'komunitas_dok_pesantren' => $this->komunitas_dok->getDok(2),
            'komunitas_dok_masjid' => $this->komunitas_dok->getDok(3),
            'komunitas_dok_kampus' => $this->komunitas_dok->getDok(4),
            'komunitas_dok_karyawan' => $this->komunitas_dok->getDok(5),
            // 'jml_id_komunitas' => $this->komunitas->sumId_komunitas()
        ];
        return view('pages/solusikomunitas', $data);
    }
}
