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
        Schema::create('queue_number', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('queue_name_number');
            $table->unsignedBigInteger('usertype_id')->nullable();
            $table->timestamps();


            
            $table->foreign('usertype_id')->references('id')->on('usertype')->onUpdate('cascade')->onDelete('cascade');
        }); 
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('queue_number', function (Blueprint $table) {
            $table->dropForeign(['usertype_id']);

        });

        Schema::dropIfExists('queue_number');
    }
};
