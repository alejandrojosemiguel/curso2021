<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Comment;

class Curso extends Model
{
    use HasFactory;

    // protected $fillable = ['name','category','description'];

    protected $guarded = [];

    // protected $table='users';
    public function users(){
        return $this->belongsToMany('App\Models\User');
    }

    // relación polimórfica uno a muchos
    public function comments(){
        return $this->morphMany(Comment::class, 'commentable');
    }
    
    public function getRouteKeyName()
    {
        return 'slug';
    }

}
