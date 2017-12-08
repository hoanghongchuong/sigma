<?php 
namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['username','name', 'email','phone','diachi', 'password', 'level','photo'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = ['password', 'remember_token'];

	 public function getFieldList()
    {
    	return $this->fillable;
    }

	public function deleteById($id){
		return $this->where('id',$id)->delete();
	}
}
