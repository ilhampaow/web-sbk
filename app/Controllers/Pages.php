<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | USSI-SBK'
        ];
        return view('Pages/dashboard', $data);
    }
}
