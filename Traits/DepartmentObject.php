<?php
namespace Modules\Personnel\Traits;

use Modules\Personnel\Models\Department;

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
