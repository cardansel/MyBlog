<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Post extends Model
{
    use HasFactory,SoftDeletes;

    protected $guarded=['id','created_at','updated_at'];
    protected $dates=['deleted'];



    //Relacion de uno a Muchos inversa
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    //Relacion Muchos a Muchos

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    //Relacion 1 q 1 Polimorfica
    public function image()
    {
        return $this->morphOne(Image::class,'imageable');
    }
}
