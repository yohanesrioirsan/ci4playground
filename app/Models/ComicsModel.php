<?php

namespace App\Models;

use CodeIgniter\Model;

class ComicsModel extends Model
{
    protected $table = 'comic';
    protected $useTimestamps = true;
    protected $allowedFields = ['title', 'slug', 'writer', 'author', 'synopsis', 'cover'];

    public function getComics($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }

    public function deletes($slug = false) {
        return $this->where('slug', $slug)->delete();
    }
}
