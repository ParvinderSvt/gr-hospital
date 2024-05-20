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
        Schema::table('appointments', function (Blueprint $table) {
            $table->string('email')->nullable();
            $table->string('city')->nullable();
            $table->time('time')->nullable();
            $table->string('doctor')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('appointments', function (Blueprint $table) {
            $table->dropColumn('email');
            $table->dropColumn('city');
            $table->dropColumn('time');
            $table->dropColumn('doctor');
            //
        });
    }
};
