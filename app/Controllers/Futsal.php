<?php

namespace App\Controllers;

use App\Models\FutsalModel;
use CodeIgniter\Exceptions\PageNotFoundException;
use CodeIgniter\RESTful\ResourceController;

class Futsal extends BaseController
{
    protected $format = 'json';
    // protected $newsModel;

    // public function __construct()
    // {
    //     $this->newsModel = new NewsModel();
    // }
    public function index()
    {
        $currentPage = $this->request->getVar('page_futsal') ? $this->request->getVar('page_futsal') : 1;

        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $futsal = $this->futsalModel->search($keyword);
        } else {
            $futsal = $this->futsalModel;
        }
        // $news = $this->newsModel->findAll();

        $data = [
            'title' => 'Daftar Futsal',
            'futsal' => $futsal->paginate(5, 'futsal'),
            'pager' => $this->futsalModel->pager,
            'currentPage' => $currentPage
        ];

        return view('admin/futsal', $data);
    }

    public function add()
    {
        return view('admin/add_futsal');
    }

    public function create()
    {
        session();
        $data = [
            'title' => 'Form Add Futsal',
            'validation' => \Config\Services::validation()
        ];
        return view('admin/add_futsal', $data);
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

        $this->futsalModel->save([
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

        return redirect()->to('/futsal');
        // dd($this->request->getVar());
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Form Edit Futsal',
            'futsal' => $this->futsalModel->getFutsal($id)
        ];

        return view('admin/edit_futsal', $data);
    }

    public function delete($id)
    {
        $futsal = $this->futsalModel->find($id);
        unlink('images/' . $futsal['gambar']);

        $futsal = $this->futsalModel->find($id);
        unlink('images/' . $futsal['slide_1']);

        $futsal = $this->futsalModel->find($id);
        unlink('images/' . $futsal['slide_2']);

        $futsal = $this->futsalModel->find($id);
        unlink('images/' . $futsal['slide_3']);

        $this->futsalModel->delete($id);
        session()->setFlashdata('pesan1', 'Data berhasil dihapus.');
        return redirect()->to('/futsal');
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
            $namaSampul1 = $fileSampul1->getName();

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

        $this->futsalModel->save([
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

        return redirect()->to('/futsal');
        // dd($this->request->getVar());
    }
}
