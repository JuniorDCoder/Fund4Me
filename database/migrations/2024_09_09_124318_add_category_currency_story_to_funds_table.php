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
        Schema::table('funds', function (Blueprint $table) {
            $table->integer('category_id')->default(1)->after('description');
            $table->string('currency')->default("XAF")->after('target_amount');
            $table->text('story')->nullable()->after('description');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('funds', function (Blueprint $table) {
            $table->dropColumn(['category_id', 'currency', 'story']);
        });
    }
};
