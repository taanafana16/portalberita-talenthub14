<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;

    protected $fillable = [
        'judulberita',
        'tanggalpublish',
        'kategori_id',
        'deskripsiberita',
        'foto1',
        'captionfoto1',
        'foto2',
        'captionfoto2',
        'foto3',
        'captionfoto3',
        'user_id',
    ];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
