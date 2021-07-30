<?php

namespace App\Controllers;

use App\Models\NewsModel;
use App\Models\GalleryModel;
use App\Models\FeedbackModel;

class Pages extends BaseController
{
    public function index()
    {
        $news = $this->newsModel->findAll();
        $gallery = $this->galModel->findAll();

        $data = [
            'title' => 'Daftar Berita',
            'title' => 'Daftar Gallery',
            'news' => $news,
            'gallery' => $gallery
        ];


        // $data2 = [
        //     'title' => 'Daftar Gallery',
        //     'gallery' => $gallery
        // ];

        return view('pages/home', $data);
    }

    public function detail($slug)
    {
        $news = $this->newsModel->getNews($slug);
        $data = [
            'tittle' => 'Detail News',
            'news' => $news
        ];
        return view('pages/news_detail', $data);
    }

    public function save()
    {
        $this->feedModel->save([
            'nama' => $this->request->getVar('nama'),
            'notelp' => $this->request->getVar('notelp'),
            'email' => $this->request->getVar('email'),
            'message' => $this->request->getVar('message')
        ]);

        return redirect()->to('/');

        // dd($this->request->getVar());
    }
}
