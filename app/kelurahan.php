<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kelurahan extends Model
{
    protected $table = 'kelurahans';

    protected $fillable = [
        'id_kelurahan',
        'nama_kelurahan',
        'nama_lurah',
        'masa_jabatan',
        'no_telp',
        'email'
    ];

    protected $primaryKey = 'id_kelurahan';

    public function warga()
    {
        return $this->hasMany(warga::class);
    }
}
