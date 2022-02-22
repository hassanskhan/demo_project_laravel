<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\comments;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title','description','user_id'];

    public function comments(){
        
        return $this->hasMany(comments::class);
    }

}
