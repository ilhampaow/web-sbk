<?php

namespace App\Controllers;

use App\Models\digitalModel;
use App\Models\digitalProdukModel;
use App\Models\digitalProdukDokModel;

class Solusidigital extends BaseController
{
    protected $digital;
    protected $digital_produk;
    protected $digital_produk_dok;

    public function __construct()
    {
        $this->digital = new digitalModel();
        $this->digital_produk = new digitalProdukModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Solusi Digital',
            'digital' => $this->digital->findAll()
        ];
        return view('pages/solusidigital', $data);
    }
    public function details($slug, $id)
    {
        $data = [
            'title' => 'Solusi Digital',
            'digital_produk' => $this->digital_produk->getDigitalProduk($slug),
            'digital_produk_dok' => $this->digital_produk->getDigitalProdukDok($slug, $id),
            'digital' => $this->digital_produk->getJudulDigitalProduk($slug)
        ];
        dd($data['digital_produk_dok']);
        return view('solusidigital/details', $data);
    }
}
