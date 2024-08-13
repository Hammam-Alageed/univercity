<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id(); 
            $table->string('std')->unique(); // students_no, unique constraint
            $table->string('name_ar'); 
            $table->string('name_en'); 
            $table->string('email')->unique(); 
            $table->string('phone')->unique(); 
            $table->date('dob'); // Date of birth
            $table->string('address')->nullable();
            $table->string('image')->nullable(); 
            $table->boolean('is_active')->default(false);
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
        Schema::dropIfExists('students');
    }
};
