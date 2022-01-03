<?php

namespace App\Controllers;

use App\Models\digitalModel;
use App\Models\digitalProdukModel;
use App\Models\produkUmumModel;

class Solusidigital extends BaseController
{
    protected $digital;
    protected $digital_produk;
    protected $digital_produk_dok;
    protected $jenis_bisnis;

    public function __construct()
    {
        $this->digital = new digitalModel();
        $this->digital_produk = new digitalProdukModel();
        $this->jenis_bisnis = new produkUmumModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Solusi Digital',
            'digital' => $this->digital->findAll(),
            'jenis_bisnis' => $this->jenis_bisnis->getJenisBisnis(),
            'jenis_digital' => $this->jenis_bisnis->getJenisDigital(),
            'jenis_komunitas' => $this->jenis_bisnis->getJenisKomunitas()
        ];
        return view('pages/solusidigital', $data);
    }
    public function details($slug)
    {
        $data = [
            'title' => 'Solusi Digital',
            'digital_produk' => $this->digital_produk->getDigitalProduk($slug),
            'digital_produk_dok' => $this->digital_produk->getDigitalProdukDok($slug),
            'digital_dok' => $this->digital_produk->getJudulDigitalProduk($slug),
            'jenis_bisnis' => $this->jenis_bisnis->getJenisBisnis(),
            'jenis_digital' => $this->jenis_bisnis->getJenisDigital(),
            'jenis_komunitas' => $this->jenis_bisnis->getJenisKomunitas()
        ];
        return view('solusidigital/details', $data);
    }
}
