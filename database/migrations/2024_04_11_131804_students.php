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
        Schema::create('students', function (Blueprint $table){
            //$table->id();
            $table->string('StudentNumber');
            $table->string('StudentName');
            $table->decimal('Amount',12,2);
            $table->string('College');
            $table->date('DueDate')->nullable();
            $table->date('DatePaid')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
