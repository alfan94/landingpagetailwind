<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tentang extends Model
{
    use HasFactory;
    protected $fillable=[
        'judul',
        'keterangan',
        'isi',
        'isi1',
        'isi2',
        'isi3',
      ];
}
