<?php

namespace App\Controllers;

class Faq extends BaseController
{
  public function index()
  {
    $data = [
      'title' => 'Faq | USSI-SBK'
    ];

    return view('pages/faq', $data);
  }
}
