<?php

namespace App\Models;

use CodeIgniter\Model;

class FeedbackModel extends Model
{
    protected $table      = 'feedback';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama', 'notelp', 'email', 'message'];


    public function search($keyword)
    {
        // $builder = $this->table('feedback');
        // $builder->like('nama', $keyword);
        return $this->table('feedback')->like('nama', $keyword)->orLike('email', $keyword);
    }
}
