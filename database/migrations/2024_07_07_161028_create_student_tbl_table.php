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
        Schema::create('student_tbl', function (Blueprint $table) {
            $table->increments('std_id');
            $table->string('std_name')->unique();
            $table->string('std_roll');
            $table->string('std_fatherName');
            $table->string('std_motherName');
            $table->string('std_email')->unique();
            $table->string('std_password');
            $table->string('std_Address');
            $table->string('std_department');
            $table->string('std_phone');
            $table->string('std_admissionYear');
            $table->string('std_image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_tbl');
    }
};
