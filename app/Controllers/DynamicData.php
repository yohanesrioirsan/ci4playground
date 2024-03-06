<?php

namespace App\Controllers;

use App\Models\DynamicDataModel;

class DynamicData extends BaseController
{
    protected $dataModel;

    public function __construct()
    {
        $this->dataModel = new DynamicDataModel();
    }

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
        $product_name = $this->request->getPost('product_name[]');
        $product_price = $this->request->getPost('product_price[]');
        $product_qty = $this->request->getPost('product_qty[]');
        $data = array();

        $index = 0;
        foreach ($product_name as $pname) {
            array_push($data, array(
                'product_name' => $pname,
                'product_price' => $product_price[$index],
                'product_qty' => $product_qty[$index],
            ));

            $index++;
        }

        $this->dataModel->insertBatch($data);


        echo dd($data);
    }
}
