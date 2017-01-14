<?php
/**
 * Created by PhpStorm.
 * User: rsilveira
 * Date: 14/01/17
 * Time: 17:36
 */

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'group_id',
        'created_at',
        'updated_at',
        'company_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function groups()
    {
        return $this->belongsToMany('App\Group', 'user_group', 'user_id', 'group_id');
    }

    public function companies()
    {
        return $this->belongsTo('App\Company', 'company_id');
    }
}
