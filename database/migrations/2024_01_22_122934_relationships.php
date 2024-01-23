<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Relationships extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_tasks', function(Blueprint $table){
            $table->id();
            $table->timestamps();            
            $table->unsignedBigInteger('employee_id');
            $table->unsignedBigInteger('task_id');

            // Foreign keys
            $table->foreign('employee_id')->references('id')->on('employees');
            $table->foreign('task_id')->references('id')->on('tasks');
        });
        
        Schema::table('employees', function (Blueprint $table){
            // Foreign keys
            $table->unsignedBigInteger('department_id');
            $table->foreign('department_id')->references('id')->on('departments');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        // Remove departments foreign keys
        Schema::table('employees', function (Blueprint $table) {
            // Remove FK
            $table->dropForeign('employees_department_id_foreign');
            // Remove column
            $table->dropColumn('department_id');
        });

        Schema::dropIfExists('employee_tasks');
    }
}
