<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    /**
     * [$table description]
     * @var string
     */
    protected $table = 'company';

    /**
     * [$timestamps description]
     * @var boolean
     */
    public $timestamps = false;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name'
    ];

    public function user()
    {
        return $this->hasMany('App\User', 'company_id', 'id');
    }
}
