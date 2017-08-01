<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
	protected $table ='siswas';
    protected $fillable = ['nama','orangtuaid','umur','jk','alamat'];
    protected $visible = ['nama','orangtuaid','umur','jk','alamat'];
    public $timestamps = true;

    public function orangtua()
    {
    	return $this->belongsTo('App\Orangtua','orangtuaid');
    }
}
