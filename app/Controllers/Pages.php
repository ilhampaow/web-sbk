<?php

namespace App\Controllers;

use App\Models\bisnisDokModel;
use App\Models\bisnisProdukDiklatModel;
use App\Models\bisnisProdukModel;
use App\Models\pernyataanModel;
use App\Models\regulasiKoperasiModel;
use App\Models\regulasiLkmsModel;
use App\Models\fatwaDsnMuiModel;
use App\Models\komunitasModel;
use App\Models\komunitasDokModel;
use App\Models\produkUmumModel;

class Pages extends BaseController
{
    protected $solusibisnisModel;
    protected $diklat;
    protected $dok_diklat;
    protected $pernyataan;
    protected $regulasi_kop;
    protected $regulasi_lkms;
    protected $fatwa_dsn_mui;
    protected $jenis_bisnis;
    protected $komunitas;
    protected $komunitas_dok;
    public function __construct()
    {
        $this->solusibisnisModel = new bisnisProdukModel();
        $this->diklat = new bisnisProdukDiklatModel();
        $this->dok_diklat = new bisnisDokModel();
        $this->pernyataan = new pernyataanModel();
        $this->regulasi_kop = new regulasiKoperasiModel();
        $this->regulasi_lkms = new regulasiLkmsModel();
        $this->fatwa_dsn_mui = new fatwaDsnMuiModel();
        $this->jenis_bisnis = new produkUmumModel();
        $this->komunitas = new komunitasModel();
        $this->komunitas_dok = new komunitasDokModel();
    }
    public function index()
    {
        $data = [
            'title' => 'Home | USSI-SBK',
            'solusibisnis' => $this->solusibisnisModel->getSolusiBisnisProduk(),
            'jenis_bisnis' => $this->jenis_bisnis->getJenisBisnis(),
            'jenis_digital' => $this->jenis_bisnis->getJenisDigital(),
            'jenis_komunitas' => $this->jenis_bisnis->getJenisKomunitas(),
            'komunitas' => $this->komunitas->findAll(),
            'komunitas_dok_desa' => $this->komunitas_dok->getDok(1),
            'komunitas_dok_pesantren' => $this->komunitas_dok->getDok(2),
            'komunitas_dok_masjid' => $this->komunitas_dok->getDok(3),
            'komunitas_dok_kampus' => $this->komunitas_dok->getDok(4),
            'komunitas_dok_karyawan' => $this->komunitas_dok->getDok(5),
        ];
        return view('Pages/dashboard', $data);
    }
}
