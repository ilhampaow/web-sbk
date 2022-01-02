<?php

namespace App\Controllers;

use App\Models\produkUmumModel;

class Faq extends BaseController
{
  protected $jenis_bisnis;
  public function __construct()
  {
    $this->jenis_bisnis = new produkUmumModel();
  }
  public function index()
  {
    $data = [
      'title' => 'Faq | USSI-SBK',
      'jenis_bisnis' => $this->jenis_bisnis->getJenisBisnis(),
      'jenis_digital' => $this->jenis_bisnis->getJenisDigital(),
      'jenis_komunitas' => $this->jenis_bisnis->getJenisKomunitas()

    ];

    return view('pages/faq', $data);
  }
}
