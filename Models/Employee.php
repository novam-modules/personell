<?php

namespace Admin\Personell\Models;

use App\Models\Auth\User;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
        "user_id", "contact_id", "empno", "azure_id", "bamboo_id", "payroll_id", "netsuite_id", "department_id", "job_title", "division_id", "accrued_pto", "hired_at", "started_at", "end_at",
    ];
}
