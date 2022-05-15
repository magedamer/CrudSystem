<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;

    protected $fillable = ['album_id','photo','title','size','description'];

    public function album()
    {
        return $this->belongsTo('App\Models\Album');
    }
}
