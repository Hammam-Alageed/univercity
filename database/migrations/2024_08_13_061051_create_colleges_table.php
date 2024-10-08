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
        Schema::create('colleges', function (Blueprint $table) {
            $table->id(); 
            $table->string('name_ar'); 
            $table->string('name_en'); 
            $table->string('location'); // College location
            $table->string('contact_email')->unique()->nullable(); 
            $table->string('contact_phone')->nullable()->nullable();
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
        Schema::dropIfExists('colleges');
    }
};
