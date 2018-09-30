<?php

foreach(user_routes() as $prefix){

    Route::prefix($prefix)->group(function() {
        Route::resource('personell/departments', DepartmentController::class);
        Route::resource('personell/employees', EmployeeController::class);
        Route::resource('personell/positions', PositionController::class);
        Route::resource('personell', PersonellController::class);
    });
}
