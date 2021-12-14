<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Dashboard | USSI-SBK'
        ];
        return view('Pages/dashboard', $data);
    }
    public function solusibisnissyariah()
    {
        $data = [
            'title' => 'Solusi Bisnis Syariah'
        ];
        return view('pages/solusibisnissyariah', $data);
    }
}
