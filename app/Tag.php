<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table = 'tags';

    protected $fillable = [
    	'name',
    	'slug',
    	'status',
    	'created_at',
    	'updated_at'
    ];

    /**
     * get field list
     * @return array
     */
    public function getFieldList()
    {
    	return $this->fillable;
    }

    /**
     * insert or update tag
     * @param  array $data
     * @param  integer|null $id
     * @return Object
     */
    public function insertOrUpdate($data, $id = null)
    {
    	if ($id) {
    		$tag = $this->find($id);
    	} else {
    		$tag = $this;
    	}
        $tag->name = $data['name'];
        $tag->slug = isset($data['slug']) ? str_slug($data['slug']) : str_slug($data['name']);
        return $tag->save();
    }
    
    /**
     * delete by id
     * @param  integer $id
     * @return bool
     */
    public function deleteById($id)
    {
    	return $this->where('id', $id)->delete();
    }

    /**
     * search by name
     * @param  string $name
     * @return array
     */
    public function searchByName($name)
    {
    	return $this->selectRaw('id as value, name as label')->where('name', 'LIKE', '%' . $name . '%')->get()->toArray();
    }
}
