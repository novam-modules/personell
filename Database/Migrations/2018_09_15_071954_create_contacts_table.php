<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('pref_name')->nullable();
            $table->string('address', 64)->nullable();
            $table->string('city', 32)->nullable();
            $table->string('state', 16)->nullable();
            $table->string('zipcode', 12)->nullable();
            $table->string('country', 16)->nullable();
            $table->string('phone_work', 32)->nullable();
            $table->string('phone_fax', 32)->nullable();
            $table->string('phone_cell', 32)->nullable();
            $table->string('biography')->nullable();
            $table->string('photo')->nullable();
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
        Schema::dropIfExists('contacts');
    }
}
