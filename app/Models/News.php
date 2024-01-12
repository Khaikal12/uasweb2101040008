<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $table = 'news';
    protected $fillable = ['judul', 'isi', 'kategori', 'image'];

    public function category()
    {
        return $this->belongsTo(Kategori::class, 'kategori', 'id');
    }
}
