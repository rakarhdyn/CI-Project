<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class BasketList extends ResourceController
{

    protected $modelName = 'App\Models\BasketModel';
    protected $format   = 'json';

    public function index()
    {
        $data = [
            'message' => 'success',
            'result' => $this->model->findAll()
        ];
        return $this->response->setStatusCode(200)->setJSON($data);
    }

    public function show($id = null)
    {
        $data = [
            'message' => 'success',
            'result' => $this->model->find($id)
        ];

        return $this->respond($data, 200);
    }
}
