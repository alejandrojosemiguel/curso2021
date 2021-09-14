<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    // uno a muchos    
    public function users(){
        return $this->hasMany(User::class);
    }

    // relación polimórfica uno a muchos
    public function comments(){
        return $this->morphMany(Comment::class, 'commentable');
    }
    
}
