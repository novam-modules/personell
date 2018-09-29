<?php

namespace Admin\Personell\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        "user_id", "name", "first_name", "last_name", "pref_name", "address", "city", "state", "zipcode", "country", "phone_work", "phone_fax", "phone_cell", "biography", "photo"
    ];

    public function getNameAttribute()
    {
        return $this->first_name." ".$this->last_name;
    }
}
