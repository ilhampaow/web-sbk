<?php

namespace App\Controllers;

use App\Models\digitalModel;
use App\Models\digitalProdukModel;
use CodeIgniter\Exceptions\PageNotFoundException;

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
    public function details($slug)
    {
        $data = [
            'title' => 'Solusi Digital',
            'digital_produk' => $this->digital_produk->getDigitalProduk($slug),
            'digital_produk_dok' => $this->digital_produk->getDigitalProdukDok($slug, '1'),
            'digital_dok' => $this->digital_produk->getJudulDigitalProduk($slug)
        ];
        return view('solusidigital/details', $data);
    }
}
