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
        
        Schema::create('payroll_tlb', function (Blueprint $table) {
            $table->id();
            $table->integer('PayrollID');
            $table->string('EmployeeID');
            $table->date('PayDate');
            $table->string('BasicSalary');
            $table->string('Deductions');
            $table->string('Bonuses');
            $table->string('NetPay');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations. 
     */
    public function down(): void
    {
        //
    }
};
