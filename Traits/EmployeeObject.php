<?php
namespace Admin\Personell\Traits;

use Admin\Personell\Models\Employee;

/**
 * Employee
 */
trait EmployeeObject
{
    public function Employee()
    {
        return $this->hasOne(Employee::class);
    }
}
