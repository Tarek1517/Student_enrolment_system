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
        Schema::create('teacher_tbl', function (Blueprint $table) {
            $table->increments('Teacher_id');
            $table->string('Teacher_name');
            $table->string('Teacher_phn');
            $table->string('Teacher_address');
            $table->string('Teacher_department');
            $table->string('Teacher_img');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teacher_tbl');
    }
};
