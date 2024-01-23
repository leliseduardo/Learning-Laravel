<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->timestamps();
            $table->string('name', 70);
            $table->string('phone', 20);
            $table->string('email', 20);

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

        // Delete table
        // Schema::table('employee', function(Blueprint $table) {

        //     $table->dropColumn(['name', 'phone', 'email']);
        // });
    }
}
