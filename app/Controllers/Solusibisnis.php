<?php

namespace App\Controllers;

use App\Models\bisnisDokModel;
use App\Models\bisnisProdukDiklatModel;
use App\Models\bisnisProdukModel;
use App\Models\pernyataanModel;
use App\Models\regulasiKoperasiModel;
use App\Models\regulasiLkmsModel;
use App\Models\fatwaDsnMuiModel;
use App\Models\produkUmumModel;

class Solusibisnis extends BaseController
{
    protected $solusibisnisModel;
    protected $diklat;
    protected $dok_diklat;
    protected $pernyataan;
    protected $regulasi_kop;
    protected $regulasi_lkms;
    protected $fatwa_dsn_mui;
    protected $jenis_bisnis;
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
    }

    public function index()
    {
        $data = [
            'title' => 'Solusi Bisnis Syariah',
            'solusibisnis' => $this->solusibisnisModel->getSolusiBisnisProduk(),
            'jenis_bisnis' => $this->jenis_bisnis->getJenisBisnis(),
            'jenis_digital' => $this->jenis_bisnis->getJenisDigital(),
            'jenis_komunitas' => $this->jenis_bisnis->getJenisKomunitas()
        ];
        // dd($data['jenis_digital']);
        return view('pages/solusibisnissyariah', $data);
    }
    public function diklat($slug)
    {
        $diklat = $this->diklat->findAll();

        $data = [
            'title' => 'Solusi Bisnis Syariah Diklat',
            'diklat' => $diklat,
            'dok_diklat' => $this->dok_diklat,
            'id_pernyataan' => $this->pernyataan->findColumn('id_pernyataan'),
            'pernyataan' => $this->pernyataan->findAll(),
            'jenis_bisnis' => $this->jenis_bisnis->getJenisBisnis(),
            'jenis_digital' => $this->jenis_bisnis->getJenisDigital(),
            'jenis_komunitas' => $this->jenis_bisnis->getJenisKomunitas()

        ];

        return view('solusibisnissyariah/diklat', $data);
    }
    public function regulasi($slug)
    {

        $data = [
            'title' => 'Solusi Bisnis Syariah Diklat',
            'regulasi_kop' => $this->regulasi_kop->findAll(),
            'regulasi_lkms' => $this->regulasi_lkms->findAll(),
            'jenis_bisnis' => $this->jenis_bisnis->getJenisBisnis(),
            'jenis_digital' => $this->jenis_bisnis->getJenisDigital(),
            'jenis_komunitas' => $this->jenis_bisnis->getJenisKomunitas()

        ];
        return view('solusibisnissyariah/regulasi', $data);
    }
    public function fatwa($slug)
    {

        $data = [
            'title' => 'Solusi Bisnis Syariah Diklat',
            'fatwa_dsn_mui' => $this->fatwa_dsn_mui->findAll(),
            'jenis_bisnis' => $this->jenis_bisnis->getJenisBisnis(),
            'jenis_digital' => $this->jenis_bisnis->getJenisDigital(),
            'jenis_komunitas' => $this->jenis_bisnis->getJenisKomunitas()

        ];
        return view('solusibisnissyariah/fatwa', $data);
    }
}
