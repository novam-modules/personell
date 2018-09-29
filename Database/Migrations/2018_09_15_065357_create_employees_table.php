<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('empno')->unsigned()->nullable();
            $table->integer('azure_id')->unsigned()->nullable();
            $table->integer('bamboo_id')->unsigned()->nullable();
            $table->integer('payroll_id')->unsigned()->nullable();
            $table->integer('netsuite_id')->unsigned()->nullable();
            $table->string('department')->nullable()->nullable();
            $table->string('job_title')->nullable()->nullable();
            $table->tinyInteger('division_id')->unsigned()->nullable();
            $table->decimal('accrued_pto', 5, 2)->default(0);
            $table->timestamp('hired_at')->nullable();
            $table->timestamp('started_at')->nullable();
            $table->timestamp('end_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
