<?php

namespace App\Models;

use CodeIgniter\Model;

class NewsModel extends Model
{
    protected $table      = 'news';
    protected $useTimestamps = false;
    protected $allowedFields = ['title', 'cover', 'content', 'author', 'slug'];

    public function getNews($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }

    public function search($keyword)
    {
        // $builder = $this->table('feedback');
        // $builder->like('nama', $keyword);
        return $this->table('news')->like('title', $keyword);
    }
}
