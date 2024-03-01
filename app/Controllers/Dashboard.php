<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {

        $data = [
            'title' => 'Dashboard'
        ];

        // $session = session();


        return view('dashboard', $data);
    }
}
