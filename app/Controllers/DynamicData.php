<?php

namespace App\Controllers;

class DynamicData extends BaseController
{
    public function index()
    {

        $data = [
            'title' => 'Dynamic Data Add',
            'ajax' => 'dynamic-data'
        ];

        return view('dynamic-data', $data);
    }

    public function add()
    {
        $data = $this->request->getPost();

        return dd($data);
    }
}
