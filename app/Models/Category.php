<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
Use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable=['name','slug'];
    protected $dates=['deleted'];

    public function getRouteKeyName()
    {
        return 'slug';
    }

      //Relacion uno a Muchos
      public function posts()
      {
          return $this->hasMany(Post::class);
      }
}
