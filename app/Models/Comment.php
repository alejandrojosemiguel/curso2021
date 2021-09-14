<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Comment extends Model
{
    use HasFactory;

    public function commentable(){
        return $this->morphTo();
    }

    public function comments(){
        return $this->belongsTo(User::class);
    }
}
