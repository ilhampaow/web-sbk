<?php

namespace App\Controllers;

class Berita extends BaseController
{
  public function index()
  {
    $data = [
      'title' => 'Artikel | USSI-SBK'
    ];

    return view('berita/index', $data);
  }

  public function detail()
  {
    $data = [
      'title' => 'Detail | USSI-SBK'
    ];

    return view('berita/detail', $data);
  }
}
