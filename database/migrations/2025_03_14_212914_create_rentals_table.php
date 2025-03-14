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
        Schema::create('rentals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('car_id')->constrained()->onDelete('cascade');
            $table->date('from');
            $table->date('to');
            $table->integer('total_price');
            $table->timestamps();
        });
        
    }
    public function down(): void
    {
        Schema::dropIfExists('rentals');
    }
};