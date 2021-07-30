<?php

namespace App\Controllers;

use App\Models\gymModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class gym extends BaseController
{
    // protected $newsModel;

    // public function __construct()
    // {
    //     $this->newsModel = new NewsModel();
    // }
    public function index()
    {
        $currentPage = $this->request->getVar('page_gym') ? $this->request->getVar('page_gym') : 1;

        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $gym = $this->gymModel->search($keyword);
        } else {
            $gym = $this->gymModel;
        }
        // $news = $this->newsModel->findAll();

        $data = [
            'title' => 'Daftar gym',
            'gym' => $gym->paginate(5, 'gym'),
            'pager' => $this->gymModel->pager,
            'currentPage' => $currentPage
        ];

        return view('admin/gym', $data);
    }

    public function add()
    {
        return view('admin/add_gym');
    }

    public function create()
    {
        session();
        $data = [
            'title' => 'Form Add gym',
            'validation' => \Config\Services::validation()
        ];
        return view('admin/add_gym', $data);
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

        $fileSampul = $this->request->getFile('gambar');
        $fileSampul->move('images');
        $namaSampul = $fileSampul->getName();
        $fileSampul1 = $this->request->getFile('slide_1');
        $fileSampul1->move('images');
        $namaSampul1 = $fileSampul1->getName();
        $fileSampul2 = $this->request->getFile('slide_2');
        $fileSampul2->move('images');
        $namaSampul2 = $fileSampul2->getName();
        $fileSampul3 = $this->request->getFile('slide_3');
        $fileSampul3->move('images');
        $namaSampul3 = $fileSampul3->getName();

        $this->gymModel->save([
            'nama' => $this->request->getVar('nama'),
            'gambar' => $namaSampul,
            'slide_1' => $namaSampul1,
            'slide_2' => $namaSampul2,
            'slide_3' => $namaSampul3,
            'fasilitas' => $this->request->getVar('fasilitas'),
            'alamat' => $this->request->getVar('alamat'),
            'jam_operasional' => $this->request->getVar('jam_operasional'),
            'kontak' => $this->request->getVar('kontak')
        ]);

        session()->setFlashdata('pesan', 'Input data berhasil.');

        return redirect()->to('/gym');
        // dd($this->request->getVar());
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Form Edit gym',
            'gym' => $this->gymModel->getgym($id)
        ];

        return view('admin/edit_gym', $data);
    }

    public function delete($id)
    {
        $gym = $this->gymModel->find($id);
        unlink('images/' . $gym['gambar']);
        $gym = $this->gymModel->find($id);
        unlink('images/' . $gym['slide_1']);
        $gym = $this->gymModel->find($id);
        unlink('images/' . $gym['slide_2']);
        $gym = $this->gymModel->find($id);
        unlink('images/' . $gym['slide_3']);

        $this->gymModel->delete($id);
        session()->setFlashdata('pesan1', 'Data berhasil dihapus.');
        return redirect()->to('/gym');
    }
    //------------------------------------------------------------
    public function update($id)
    {
        $fileSampul = $this->request->getFile('gambar');
        if ($fileSampul->getError() == 4) {
            $namaSampul = $this->request->getVar('gambarLama');
        } else {
            $namaSampul = $fileSampul->getName();

            $fileSampul->move('images', $namaSampul);

            unlink('images/' . $this->request->getVar('gambarLama'));
        }
        $fileSampul1 = $this->request->getFile('slide_1');
        if ($fileSampul1->getError() == 4) {
            $namaSampul1 = $this->request->getVar('gambarLama1');
        } else {
            $namaSampul1 = $fileSampul->getName();

            $fileSampul1->move('images', $namaSampul1);

            unlink('images/' . $this->request->getVar('gambarLama1'));
        }
        $fileSampul2 = $this->request->getFile('slide_2');
        if ($fileSampul2->getError() == 4) {
            $namaSampul2 = $this->request->getVar('gambarLama2');
        } else {
            $namaSampul2 = $fileSampul2->getName();

            $fileSampul2->move('images', $namaSampul2);

            unlink('images/' . $this->request->getVar('gambarLama2'));
        }
        $fileSampul3 = $this->request->getFile('slide_3');
        if ($fileSampul3->getError() == 4) {
            $namaSampul3 = $this->request->getVar('gambarLama3');
        } else {
            $namaSampul3 = $fileSampul3->getName();

            $fileSampul3->move('images', $namaSampul3);

            unlink('images/' . $this->request->getVar('gambarLama3'));
        }

        $this->gymModel->save([
            'id' => $id,
            'nama' => $this->request->getVar('nama'),
            'gambar' => $namaSampul,
            'slide_1' => $namaSampul1,
            'slide_2' => $namaSampul2,
            'slide_3' => $namaSampul3,
            'fasilitas' => $this->request->getVar('fasilitas'),
            'alamat' => $this->request->getVar('alamat'),
            'jam_operasional' => $this->request->getVar('jam_operasional'),
            'kontak' => $this->request->getVar('kontak')
        ]);

        session()->setFlashdata('pesan', 'Edit data berhasil.');

        return redirect()->to('/gym');
        // dd($this->request->getVar());
    }
}
