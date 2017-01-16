<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class UserGroup extends Model
{
	/**
	 * [$table description]
	 * @var string
	 */
	protected $table = 'user_group';

	/**
     * [$timestamps description]
     * @var boolean
     */
    public $timestamps = false;

	/**
	 * [$fillable description]
	 * @var [type]
	 */
    protected $fillable = [
    	'user_id','group_id'
    ];

	/**
	* [group description]
	* @return [type] [description]
	*/
	public function group()
	{
		return $this->belongsTo('App\Group', 'group_id');
	}

	/**
	* [user description]
	* @return [type] [description]
	*/
	public function user()
	{
		return $this->belongsTo('App\User', 'user_id');
	}
}