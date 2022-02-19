<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class iuran extends Model
{
    protected $table = 'iurans';

    protected $fillable = [
        'id',
        'tanggal_update',
        'bulan',
        'nominal',
        'user_id'
    ];

    protected $primaryKey = 'id';
}
