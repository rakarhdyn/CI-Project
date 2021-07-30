<?php

namespace App\Controllers;

use App\Models\NewsModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class News extends BaseController
{
    // protected $newsModel;

    // public function __construct()
    // {
    //     $this->newsModel = new NewsModel();
    // }
    public function index()
    {
        $currentPage = $this->request->getVar('page_news') ? $this->request->getVar('page_news') : 1;

        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $nw = $this->newsModel->search($keyword);
        } else {
            $nw = $this->newsModel;
        }
        // $news = $this->newsModel->findAll();

        $data = [
            'title' => 'Daftar Berita',
            'news' => $nw->paginate(5, 'news'),
            'pager' => $this->newsModel->pager,
            'currentPage' => $currentPage
        ];

        return view('admin/news', $data);
    }

    public function add()
    {
        return view('admin/add_news');
    }

    public function create()
    {
        session();
        $data = [
            'title' => 'Form Add News',
            'validation' => \Config\Services::validation()
        ];
        return view('admin/add_news', $data);
    }

    public function save()
    {
        // if (!$this->validate([
        //     'cover' => [
        //         'rules' => 'uploaded[cover]|is_image[cover]|mime_in[sampul,image/jpg, image/png, image/jpeg]',
        //         'errors' => [
        //             'uploaded' => 'Pilih gambar cover terlebih dahulu',
        //             'is_image' => 'Yang anda pilih bukan gambar',
        //             'mime_in' => 'Yang anda pilih bukan gambar'
        //         ]
        //     ]
        // ])) {
        //     $validation = \Config\Services::validation();
        //     return redirect()->to('/add_news')->withInput()->with('validation', $validation);
        // }

        $fileSampul = $this->request->getFile('cover');
        $fileSampul->move('images');
        $namaSampul = $fileSampul->getName();

        $this->newsModel->save([
            'title' => $this->request->getVar('title'),
            'slug' => $this->request->getVar('slug'),
            'cover' => $namaSampul,
            'content' => $this->request->getVar('content')
        ]);

        session()->setFlashdata('pesan', 'Input data berhasil.');

        return redirect()->to('/news');
        // dd($this->request->getVar());
    }

    public function edit($slug)
    {
        $data = [
            'title' => 'Form Edit Berita',
            'news' => $this->newsModel->getNews($slug)
        ];

        return view('admin/edit_news', $data);
    }

    public function delete($id)
    {
        $news = $this->newsModel->find($id);
        unlink('images/' . $news['cover']);

        $this->newsModel->delete($id);
        session()->setFlashdata('pesan1', 'Data berhasil dihapus.');
        return redirect()->to('/news');
    }
    //------------------------------------------------------------
    public function update($id)
    {
        $fileSampul = $this->request->getFile('cover');
        if ($fileSampul->getError() == 4) {
            $namaSampul = $this->request->getVar('coverLama');
        } else {
            $namaSampul = $fileSampul->getName();

            $fileSampul->move('images', $namaSampul);

            unlink('images/' . $this->request->getVar('coverLama'));
        }

        $this->newsModel->save([
            'id' => $id,
            'title' => $this->request->getVar('title'),
            'slug' => $this->request->getVar('slug'),
            'cover' => $namaSampul,
            'content' => $this->request->getVar('content')
        ]);

        session()->setFlashdata('pesan', 'Edit data berhasil.');

        return redirect()->to('/news');
        // dd($this->request->getVar());
    }
}
