<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * [$table description]
     * @var string
     */
    protected $table = 'user';

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
        'name', 'email', 'password', 'created_at', 'updated_at', 'active', 'company_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token'
    ];

    public function company()
    {
        return $this->belongsTo('App\Company', 'company_id');
    }

    public function group()
    {
        return $this->belongsToMany('App\Group', 'user_group', 'user_id', 'group_id');
    }

    public function userGroup($auth){

        //Presidência
        if($auth->group()->where('group.id', 1)->first()){

            $users = $this->where('user.id', '!=', $auth->id)
                                                            ->get();

        //Administrativo
        }else if($auth->group()->where('group.id', 2)->first()){

            $users = $this->select('user.*')
                            ->join('user_group', 'user.id', '=', 'user_group.user_id')
                            ->join('group', 'group.id', '=', 'user_group.group_id')
                            ->where('group.id', '!=', 1)
                            ->where('user.id', '!=', $auth->id)
                            ->groupBy('user.id')
                            ->get();
        //Outros
        }else{

            $users = $this->select('user.*')
                            ->join('user_group', 'user.id', '=', 'user_group.user_id')
                            ->join('group', 'group.id', '=', 'user_group.group_id')
                            ->where('user.id', '!=', $auth->id)
                            ->whereNotIn('group.id', [1, 2])
                            ->get();                               
        }

        return $users;
    }
}
