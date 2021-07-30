<?php

namespace App\Controllers;

use CodeIgniter\Exceptions\PageNotFoundException;

class Feedback extends BaseController
{
    // protected $newsModel;

    // public function __construct()
    // {
    //     $this->newsModel = new NewsModel();
    // }
    public function index()
    {
        // $feedback = $this->feedModel->findAll();
        $currentPage = $this->request->getVar('page_feedback') ? $this->request->getVar('page_feedback') : 1;

        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $fb = $this->feedModel->search($keyword);
        } else {
            $fb = $this->feedModel;
        }

        $data = [
            'title' => 'Daftar feedback',
            'feedback' => $fb->paginate(6, 'feedback'),
            'pager' => $this->feedModel->pager,
            'currentPage' => $currentPage
        ];

        return view('admin/feedback', $data);
    }
    public function delete($id)
    {
        $this->feedModel->delete($id);
        session()->setFlashdata('pesan1', 'Data berhasil dihapus.');
        return redirect()->to('/fb');
    }

    //------------------------------------------------------------


}
