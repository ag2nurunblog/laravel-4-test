<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserGroup extends Model
{
      protected $fillable = ['user_id','group_id'];
      public function group()
      {
        return $this->belongsTo('App\Group');
      }
      public function user()
      {
        return $this->belongsTo('App\User');
      }
}
