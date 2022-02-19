<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kecamatan extends Model
{
    protected $table = 'kecamatans';

    protected $fillable = [
        'id_kecamatan',
        'nama_kecamatan',
        'nama_camat',
        'masa_jabatan',
        'no_telp',
        'email'
    ];

    protected $primaryKey = 'id_kecamatan';

    public function warga()
    {
        return $this->hasMany(warga::class);
    }
}
