<?php

namespace App\Controllers;

class About extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'About | USSI-SBK'
        ]
        return view('pages/about', $data);
    }
}
