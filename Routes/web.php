<?php

foreach(user_routes() as $prefix){

    Route::prefix($prefix)->group(function() {
        Route::resource('personnel/departments', DepartmentController::class);
        Route::resource('personnel/employees', EmployeeController::class);
        Route::resource('personnel/positions', PositionController::class);
        Route::resource('personnel', PersonnelController::class);
    });
}
