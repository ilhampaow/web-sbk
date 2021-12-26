<?php

namespace App\Controllers;

use App\Models\SolusibisnisModel;
use App\Models\solusibisnisModel_diklat;
use App\Models\solusibisnisModel_dok;

class Solusibisnis extends BaseController
{
    protected $solusibisnisModel;
    protected $diklat;
    protected $dok_diklat;
    public function __construct()
    {
        $this->solusibisnisModel = new SolusibisnisModel();
        $this->diklat = new SolusibisnisModel_diklat();
        $this->dok_diklat = new SolusibisnisModel_dok();
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
            'dok_diklat' => $this->dok_diklat
        ];
        return view('solusibisnissyariah/diklat', $data);
    }
}
