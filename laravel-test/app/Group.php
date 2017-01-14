<?php
/**
 * Created by PhpStorm.
 * User: rsilveira
 * Date: 14/01/17
 * Time: 17:36
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model {

    protected $table = 'group';

    protected $fillable = ['name'];

    public function users()
    {
        return $this->belongsToMany('App\User', 'user_group', 'group_id', 'user_id');
    }
}