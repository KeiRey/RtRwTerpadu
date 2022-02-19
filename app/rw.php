<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class rw extends Model
{
    protected $table = 'rws';

    protected $fillable = [
        'id_rw',
        'no_rw',
        'nama_rw',
        'masa_jabatan',
        'email',
        'no_telp'
    ];

    protected $primaryKey = 'id_rw';
}
