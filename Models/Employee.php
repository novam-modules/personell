<?php

namespace Modules\Personnel\Models;

use App\Models\Auth\User;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
        "user_id", "empno", "azure_id", "bamboo_id", "payroll_id", "netsuite_id", "department_id", "position_id", "division_id", "boarding", "status", "accrued_pto", "hired_at", "started_at", "end_at",
    ];
    // public function getNameAttribute()
    // {
    //     return $this->first_name." ".$this->last_name;
    // }

    // public function setNameAttribute($name)
    // {
    //     $nameParts = explode(" ", $name);
    //     $this->attributes['first_name'] = array_pop($nameParts);
    //     $this->attributes['last_name'] = implode(" ", $nameParts);
    //     unset($this->attributes['name']);
    // }


}
