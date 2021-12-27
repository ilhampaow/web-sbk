<?php

namespace App\Controllers;

use App\Models\bisnisDokModel;
use App\Models\bisnisProdukDiklatModel;
use App\Models\bisnisProdukModel;
use App\Models\pernyataanModel;

class Solusibisnis extends BaseController
{
    protected $solusibisnisModel;
    protected $diklat;
    protected $dok_diklat;
    protected $pernyataan;
    public function __construct()
    {
        $this->solusibisnisModel = new bisnisProdukModel();
        $this->diklat = new bisnisProdukDiklatModel();
        $this->dok_diklat = new bisnisDokModel();
        $this->pernyataan = new pernyataanModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Solusi Bisnis Syariah',
            'solusibisnis' => $this->solusibisnisModel->getSolusiBisnisProduk()
        ];
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

        ];
        return view('solusibisnissyariah/diklat', $data);
    }
    public function regulasi($slug)
    {

        $data = [
            'title' => 'Solusi Bisnis Syariah Diklat'

        ];
        return view('solusibisnissyariah/regulasi', $data);
    }
}
