<?php

namespace App\Controllers;

use App\Models\NewsModel;
use App\Models\GalleryModel;

class Admin extends BaseController
{
    public function index()
    {
        $db = \Config\Database::connect();
        $query = $db->query('SELECT * FROM futsal');
        $query2 = $db->query('SELECT * FROM basket');
        $query3 = $db->query('SELECT * FROM badmin');
        $query4 = $db->query('SELECT * FROM gym');
        $query->getNumRows();
        $query2->getNumRows();
        $query3->getNumRows();
        $query4->getNumRows();

        $data['jumlah_futsal'] = $query->getNumRows();
        $data['jumlah_basket'] = $query2->getNumRows();
        $data['jumlah_badmin'] = $query3->getNumRows();
        $data['jumlah_gym'] = $query4->getNumRows();

        return view('admin/index', $data);
    }
}
