<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orangtua extends Model
{
	protected $table ='orangtuas';
    protected $fillable = ['namaibu','namaayah','umuribu','umurayah','alamat'];
    protected $visible = ['namaibu','namaayah','umuribu','umurayah','alamat'];
    public $timestamps = true;

    public function siswa()
    {
    	return $this->hasMany('App\Siswa','orangtuaid');
    }

}
