<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public $fillable = ['title', 'body'];
    use HasFactory;
    public function user(){
        return $this->belongsTo(User::class);
    }


}
