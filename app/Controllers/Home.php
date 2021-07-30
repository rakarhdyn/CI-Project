<?php

namespace App\Controllers;

use App\Models\NewsModel;
use App\Models\GalleryModel;

class Home extends BaseController
{
	public function index()
	{
		$news = $this->newsModel->findAll();
		$galeri = $this->galModel->findAll();

		$data = [
			'title' => 'Daftar Berita',
			'news' => $news
		];

		$data = [
			'title' => 'Daftar Gallery',
			'gallery' => $galeri
		];

		return view('pages/home', $data);
	}
}
