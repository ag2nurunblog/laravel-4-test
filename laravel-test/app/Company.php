<?php
/**
 * Created by PhpStorm.
 * User: rsilveira
 * Date: 14/01/17
 * Time: 17:36
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model {

    protected $table = 'company';

    protected $fillable = ['name'];

    public function users()
    {
        return $this->hasMany('App\User');
    }
}