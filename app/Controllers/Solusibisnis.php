<?php

namespace App\Controllers;

use App\Models\SolusibisnisModel;
use App\Models\solusibisnisModel_diklat;

class Solusibisnis extends BaseController
{
    protected $solusibisnisModel;
    public function __construct()
    {
        $this->solusibisnisModel = new SolusibisnisModel();
        $this->diklat = new SolusibisnisModel_diklat();
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
            'diklat' => $diklat
        ];
        return view('solusibisnissyariah/diklat', $data);
    }
}
