<?php

namespace App\Controllers;

use CodeIgniter\Exceptions\PageNotFoundException;

class User extends BaseController
{
    // protected $newsModel;

    // public function __construct()
    // {
    //     $this->newsModel = new NewsModel();
    // }
    public function index()
    {
        // $feedback = $this->feedModel->findAll();
        // $currentPage = $this->request->getVar('page_feedback') ? $this->request->getVar('page_feedback') : 1;

        // $keyword = $this->request->getVar('keyword');
        // if ($keyword) {
        //     $fb = $this->feedModel->search($keyword);
        // } else {
        //     $fb = $this->feedModel;
        // }
        $db = \Config\Database::connect();
        $query = $db->query('SELECT username, email, password_hash FROM users');

        $data = [
            'title' => 'Daftar Admin',
            'admin' => $query->getResultArray()
        ];

        return view('admin/admin', $data);
    }

    //------------------------------------------------------------


}
