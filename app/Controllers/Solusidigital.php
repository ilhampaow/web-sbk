<?php

namespace App\Controllers;

use App\Models\digitalModel;
use App\Models\digitalProdukModel;

class Solusidigital extends BaseController
{
    protected $digital;
    protected $digital_produk;

    public function __construct()
    {
        $this->digital = new digitalModel();
        $this->digital_produk = new digitalProdukModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Solusi Digital',
            'digital' => $this->digital->findAll(),
            'digital_produk_1' => $this->digital_produk->getDigitalProduk(1),
            'digital_produk_2' => $this->digital_produk->getDigitalProduk(2),
            'digital_produk_3' => $this->digital_produk->getDigitalProduk(3),
            'digital_produk_4' => $this->digital_produk->getDigitalProduk(4),
            'digital_produk_5' => $this->digital_produk->getDigitalProduk(5),
        ];
        return view('pages/solusidigital', $data);
    }
}
