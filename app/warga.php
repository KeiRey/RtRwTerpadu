<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class warga extends Model
{
    protected $table = 'warga';
    protected $fillable = [
                'nik','nama','user_id',
                'jenkel','tempat_lahir',
                'tanggal_lahir','tanggal_lahir',
                'pekerjaan','penghasilan',
                'kota','kecamatan',
                'kelurahan','alamat',
                'no_rumah','email',
                'password','qrcode'];
    protected $primaryKey = 'id';

    public function kecamatan()
	{
		return $this->belongsTo('App\kecamatan');
	}
    
    public function kelurahan()
	{
		return $this->belongsTo('App\kelurahan');
	}
    
    public function user()
	{
		return $this->belongsTo(User::class);
	}
}
