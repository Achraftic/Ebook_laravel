<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    public function user(){
        return $this->belongsTo(User::class,'user_id','id');
       }
       public function books(){
        return $this->belongsTo(Books::class,'books_id','id');
       }
}
