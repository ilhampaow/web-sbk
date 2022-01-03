<?php

namespace App\Controllers;

use App\Models\komunitasModel;
use App\Models\komunitasDokModel;
use App\Models\produkUmumModel;

class Solusikomunitas extends BaseController
{

    protected $komunitas;
    protected $komunitas_dok;
    protected $jenis_bisnis;
    public function __construct()
    {
        $this->komunitas = new komunitasModel();
        $this->komunitas_dok = new komunitasDokModel();
        $this->jenis_bisnis = new produkUmumModel();
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
            'jenis_bisnis' => $this->jenis_bisnis->getJenisBisnis(),
            'jenis_digital' => $this->jenis_bisnis->getJenisDigital(),
            'jenis_komunitas' => $this->jenis_bisnis->getJenisKomunitas()
            // 'jml_id_komunitas' => $this->komunitas->sumId_komunitas()
        ];
        return view('pages/solusikomunitas', $data);
    }
}
