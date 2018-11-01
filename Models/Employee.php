<?php

namespace Modules\Personnel\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
        "user_id", "name", "first_name", "last_name", "pref_name", "address", "city", "state", "zipcode", "country", "phone_work", "phone_fax", "phone_cell", "biography", "photo"
    ];

    public function getNameAttribute()
    {
        return $this->first_name." ".$this->last_name;
    }

    public function setNameAttribute($name)
    {
        $nameParts = explode(" ", $name);
        $this->attributes['first_name'] = array_pop($nameParts);
        $this->attributes['last_name'] = implode(" ", $nameParts);
        unset($this->attributes['name']);

    }
}
