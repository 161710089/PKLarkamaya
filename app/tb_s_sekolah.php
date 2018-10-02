<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tb_s_sekolah extends Model
{
    protected $table = 'tb_s_sekolahs';
protected $fillable = array('logo','nama_sekolah','alamat','no_telepon','waktu_buka','hari_buka','Facebook','Instagram','Twitter','next');
public $timestamp = true;
}
