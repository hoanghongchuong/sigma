<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FileRead extends Model
{
    protected $table = 'docthu';
    protected $fillable = ['name','file','product_id'];
	public $timestamps = false;
    public function productFile(){
		return $this->belongsTo('App\Products');
	}
}
