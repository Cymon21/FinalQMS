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
        Schema::table('queue_number', function (Blueprint $table) {
            $table->string('que_status')->nullable()->after('usertype_id')->default('Uncatered');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('queue_number', function (Blueprint $table) {
            $table->dropColumn('que_status');
        });
    }
};
