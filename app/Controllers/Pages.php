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
}
