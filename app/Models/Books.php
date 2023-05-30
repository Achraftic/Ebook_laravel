<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    public function wish(){
        return $this->hasMany(wishList::class, 'books_id', 'id');
       }
}
