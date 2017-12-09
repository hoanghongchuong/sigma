<?php 
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;
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
	protected $fillable = ['username','name', 'email','phone','address', 'password', 'level','photo','remember_token'];

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
    public function insertOrUpdate($data, $id = null){
    	if($id){
    		$users = $this->find($id);
    	}
    	else{
    		$users = $this;
    	}
    	$users->username = $data['username'];
    	$users->password = Hash::make($data['password']);
    	$users->name = $data['name'];
    	$users->phone = $data['phone'];
    	$users->email = $data['email'];
    	$users->address = $data['address'];
    	$users->photo = $data['photo'];
    	// dd($users);
    	return $users->save(); 
    }

	public function deleteById($id){
		return $this->where('id',$id)->delete();
	}
}
