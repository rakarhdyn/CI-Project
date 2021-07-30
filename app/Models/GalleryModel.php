<?php

namespace App\Models;

use CodeIgniter\Model;

class GalleryModel extends Model
{
    protected $table      = 'gallery';
    protected $useTimestamps = false;
    protected $allowedFields = ['gambar', 'title'];

    public function getGal($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }

    public function search($keyword)
    {
        // $builder = $this->table('feedback');
        // $builder->like('nama', $keyword);
        return $this->table('gallery')->like('title', $keyword);
    }
}
