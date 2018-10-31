<?php
namespace Modules\Personell\Traits;

use Modules\Personell\Models\Department;

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
