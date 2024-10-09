<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        
        Schema::create('ems_tbl', function (Blueprint $table) {
            $table->id();
            $table->integer('EmployeeID');
            $table->string('FirstName');
            $table->string('LastName');
            $table->string('Email');
            $table->string('PhoneNo');
            $table->date('DateOfBirth');
            $table->string('Gender');
            $table->date('HireDate');
            $table->integer('DepartmentID');
            $table->string('Salary');
            $table->timestamps();
        });
    }

    /**
     *
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
