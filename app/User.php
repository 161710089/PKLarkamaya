<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laratrust\Traits\LaratrustUserTrait;

class User extends Authenticatable
{
    use LaratrustUserTrait;
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public function tb_m_artikel()
{
  // Setiap user akan memiliki banyak tb_m_artikel
  return $this->hasMany('App\tb_m_artikel','id_user');
}

  public function tb_m_event()
{
  // Setiap user akan memiliki banyak tb_m_event
  return $this->hasMany('App\tb_m_event','id_user');
}

}
