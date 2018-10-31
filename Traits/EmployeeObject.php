<?php
namespace Modules\Personell\Traits;

use Modules\Personell\Models\Employee;

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
