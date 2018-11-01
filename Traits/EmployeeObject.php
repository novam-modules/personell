<?php
namespace Modules\Personnel\Traits;

use Modules\Personnel\Models\Employee;

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
