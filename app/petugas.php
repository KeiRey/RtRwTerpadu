<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class petugas extends Model
{
    protected $table = 'petugass';

    protected $fillable = [
        'id_petugas',
        'nama_petugas',
        'email',
        'password',
        'no_telp'
    ];

    protected $primaryKey = 'id_petugas';
}
