<?php

namespace Modules\Personell\Models;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $fillable = [
        "name",
        "label",
        "permissions"
    ];

    public function setNameAttribute($name)
    {
        if(!$this->code){
            $code = "";
            $words = preg_split("/\s+/", $name);

            foreach($words as $word){
                $code .= $word[0];
            }
            $this->attributes['code'] = $code;
        }
        $this->attributes['name'] = $name;
    }
}
