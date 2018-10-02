<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tb_m_event extends Model
{
protected $table = 'tb_m_event';
protected $fillable = array('judul','waktu','gambar','id_user');
public $timestamp = true;

public function User() {
	return $this->belongsTo('App\User', 'id_user');
	}
}
