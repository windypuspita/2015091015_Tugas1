<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Puppy extends Model
{
    public function getAllPuppies()
    {
        return $this->all();
    }

    public function getPuppyById($id)
    {
        return $this->find($id);
    }
}

