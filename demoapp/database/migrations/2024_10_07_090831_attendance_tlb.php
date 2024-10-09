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
        
        Schema::create('attendance_tlb', function (Blueprint $table) {
            $table->id();
            $table->integer('EmployeeID');
            $table->date('Date');
            $table->time('CheckInTime');
            $table->time('CheckOutTime');
            $table->string('Status');
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
