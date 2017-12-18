<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SaleOf extends Model
{
    protected $table = 'saleof';
    protected $filable = ['name', 'value_sale','total_value'];
    public function getFieldList()
    {
    	return $this->filable;
    }
    public function insertOrUpdate($data, $id = null){
    	if($id){
    		$sale = $this->find($id);
    	}
    	else{
    		$sale = $this;
    	}
    	$sale->name = $data['name'];
    	$sale->value_sale = $data['value_sale'];
        $sale->total_value = $data['total_value'];
    	return $sale->save();
    }
    public function deleteById($id){
    	return $this->where('id', $id)->delete();
    }
}
