<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class program extends Model
{
    protected $table = 'programs';

    protected $fillable = [
        'id_program',
        'kas',
        'kebersihan',
        'keamanan',
        'kematian',
        'kegiatan',
        'bencana'
    ];

    protected $primaryKey = 'id_program';
}
