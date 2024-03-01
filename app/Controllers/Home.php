<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {

        $data = [
            'title' => 'CodeIgniter Playground'
        ];

        return view('index', $data);
    }
}
