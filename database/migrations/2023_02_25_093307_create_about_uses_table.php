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
        Schema::create('about_uses', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('sub_title1');
            $table->string('sub_title2');
            $table->string('sub_title3');
            $table->string('sub_title4');
            $table->string('number');
            $table->string('image');
            $table->text('about');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about_uses');
    }
};
