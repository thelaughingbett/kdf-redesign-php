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
        Schema::create('personells', function (Blueprint $table) {
            $table->id('userId')->primary();
            $table->string('FirstName');
            $table->string('LastName');
            $table->string('rank');
            $table->string('division');
            $table->string('title');
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personells');
    }
};
