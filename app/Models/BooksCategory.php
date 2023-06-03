<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BooksCategory extends Model
{
    public function books()
    {
        return $this->hasMany(Books::class,"id","categoryId");

    }
}
