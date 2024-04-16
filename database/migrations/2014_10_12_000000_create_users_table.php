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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('status')->nullable()->default('Unverified');
            $table->string('userType')->nullable();
            $table->string('disignation')->nullable();
            $table->timestamps();
            $table->engine = 'InnoDB';


            //Foreign Key execution will accept null values
            // $table->dropForeign(['usertype_id', 'designation_id']);
            // $table->unsignedBigInteger('usertype_id')->nullable()->change();
            // $table->unsignedBigInteger('designation_id')->nullable()->change();

            // $table->foreign('usertype_id')
            //         ->references('id')->on('usertype')
            //         ->onUpdate('cascade')
            //         ->onDelete('cascade');
            // $table->foreign('designation_id')
            //         ->references('id')->on('designation')
            //         ->onUpdate('cascade')
            //         ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
