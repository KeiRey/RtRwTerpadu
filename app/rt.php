<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class rt extends Model
{
    protected $table = 'rts';

    protected $fillable = [
        'id_rt',
        'no_rt',
        'nama_rt',
        'masa_jabatan',
        'email',
        'no_telp'
    ];

    protected $primaryKey = 'id_rt';
}
