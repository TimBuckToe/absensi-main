<?php

namespace App\Models;

use GuzzleHttp\Psr7\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{


    use HasFactory;

    protected $fillable = [
        'nama_guru',
        'email',
        'jenis_kelamin',
        'alamat'
    ];
}
