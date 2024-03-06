<?php

namespace App\Models;

use CodeIgniter\Model;

class DynamicDataModel extends Model
{
    protected $table = 'product_data';
    protected $allowedFields = ['product_name', 'product_price', 'product_qty'];
}
