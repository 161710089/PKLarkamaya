<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tb_m_gallery extends Model
{
     protected $table = 'tb_m_galleries';
	 protected $fillable = array('foto');
	 public $timestamp = true;
}
