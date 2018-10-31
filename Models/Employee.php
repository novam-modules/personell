<?php

namespace Modules\Personell\Models;

use App\Models\Auth\User;
use Illuminate\Database\Eloquent\Model;
use Modules\Personell\Traits\DepartmentObject;

class Employee extends Model
{
    use DepartmentObject;

    protected $fillable = [
        "user_id", "contact_id", "empno", "azure_id", "bamboo_id", "payroll_id", "netsuite_id", "department_id", "job_title", "division_id", "accrued_pto", "hired_at", "started_at", "end_at",
    ];

    protected $casts = [
        "hired_at" => "date", "started_at" => "date", "end_at" => "date"
    ];
}
