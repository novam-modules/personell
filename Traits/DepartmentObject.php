<?php
namespace Admin\Personell\Traits;

use Admin\Personell\Models\Department;

/**
 * Department
 */
trait DepartmentObject
{
    public function Department()
    {
        return $this->belongsTo(Department::class);
    }
}
