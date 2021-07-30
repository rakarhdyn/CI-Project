<?php

namespace App\Controllers;

use App\Models\NewsModel;
use App\Models\GalleryModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class Gallery extends BaseController
{
    // protected $newsModel;

    // public function __construct()
    // {
    //     $this->newsModel = new NewsModel();
    // }
    public function index()
    {
        $currentPage = $this->request->getVar('page_gallery') ? $this->request->getVar('page_gallery') : 1;

        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $gal = $this->galModel->search($keyword);
        } else {
            $gal = $this->galModel;
        }
        // $news = $this->newsModel->findAll();

        $data = [
            'title' => 'Daftar Berita',
            'gallery' => $gal->paginate(5, 'news'),
            'pager' => $this->galModel->pager,
            'currentPage' => $currentPage
        ];

        return view('admin/galeri', $data);
    }

    public function add()
    {
        return view('admin/add_gallery');
    }

    public function save()
    {
        $fileGal = $this->request->getFile('gambar');
        $fileGal->move('images');
        $namaGal = $fileGal->getName();

        $this->galModel->save([
            'title' => $this->request->getVar('title'),
            'gambar' => $namaGal
        ]);

        session()->setFlashdata('pesan', 'Input data berhasil.');

        return redirect()->to('/gallery');
        // dd($this->request->getVar());

    }

    public function edit($id)
    {
        $data = [
            'title' => 'Form Edit Galeri',
            'gallery' => $this->galModel->getGal($id)
        ];

        return view('admin/edit_gallery', $data);
    }

    public function delete($id)
    {
        $g = $this->galModel->find($id);
        unlink('images/' . $g['gambar']);

        $this->galModel->delete($id);
        session()->setFlashdata('pesan1', 'Data berhasil dihapus.');
        return redirect()->to('/gallery');
    }

    public function update($id)
    {
        $fileGal = $this->request->getFile('gambar');
        if ($fileGal->getError() == 4) {
            $namaGal = $this->request->getVar('gambarLama');
        } else {
            $namaGal = $fileGal->getName();

            $fileGal->move('images', $namaGal);

            unlink('images/' . $this->request->getVar('gambarLama'));
        }

        $this->galModel->save([
            'id' => $id,
            'title' => $this->request->getVar('title'),
            'gambar' => $namaGal
        ]);

        session()->setFlashdata('pesan', 'Edit data berhasil.');

        return redirect()->to('/gallery');
        // dd($this->request->getVar());
    }
    //------------------------------------------------------------


}
