<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absen extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_guru',
        'id_kelas',
        'hari_kerja',
        'jam_masuk',
        'jam_keluar'
    ];
}

/*

!id_absen Primary 	int(11)
	2 	id_guru Index 	int(11) 	
	3 	id_kelas Index 	int(11) 	
	4 	hari_kerja 	varchar(20) 	
	5 	jam_masuk 	time
	6 	jam_keluar  time


*/