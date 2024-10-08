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
        Schema::create('funds', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Owner of the fund
            $table->string('title');
            $table->text('description');
            $table->string('slug')->unique();
            $table->decimal('target_amount', 15, 2);
            $table->decimal('raised_amount', 15, 2)->default(0); // Tracks amount raised
            $table->string('image_path')->nullable();
            $table->boolean('is_public')->default(true); // Determines if the fund is public or private
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('funds');
    }
};
