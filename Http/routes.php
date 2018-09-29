<?php

Route::group(['middleware' => 'web', 'prefix' => 'admin', 'namespace' => 'Admin\Personell\Http\Controllers'], function()
{
    Route::resource('personell/employees', EmployeeController::class);
    Route::resource('personell', PersonellController::class);
});
