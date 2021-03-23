<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $table = 'mahasiswa';

    protected $primaryKey = 'nim';

    public $increments = false;

    public $timestamps = false;

    protected $fillable = [
        'nim',
        'nama',
        'email',
        'tanggal_lahir',
        'kelas',
        'jurusan',
        'no_handphone',
    ];
}