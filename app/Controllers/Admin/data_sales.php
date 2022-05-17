<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Data_sales extends BaseController
{
    public function index()
    {
        $data = $this->db->query("SELECT * FROM data_sales")->result();
        var_dump($data);
        echo view('admin/data_user', $data);
    }
}
