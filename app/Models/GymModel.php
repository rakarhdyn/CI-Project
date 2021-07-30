<?php

namespace App\Models;

use CodeIgniter\Model;

class GymModel extends Model
{
    protected $table      = 'gym';
    protected $useTimestamps = false;
    protected $allowedFields = ['nama', 'gambar', 'slide_1', 'slide_2', 'slide_3', 'fasilitas', 'alamat', 'jam_operasional', 'kontak'];

    public function getGym($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        }

        return $this->getWhere(['id' => $id])->getRowArray();
    }

    public function search($keyword)
    {
        // $builder = $this->table('feedback');
        // $builder->like('nama', $keyword);
        return $this->table('gym')->like('nama', $keyword);
    }
}
