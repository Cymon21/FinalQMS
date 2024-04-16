<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
            $table->unsignedBigInteger('usertype_id')->after('status')->nullable();
            $table->unsignedBigInteger('designation_id')->after('usertype_id')->nullable();

        

            $table->foreign('usertype_id')
                ->references('id')->on('usertype')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreign('designation_id')
                ->references('id')->on('designation')
                ->onUpdate('cascade')
                ->onDelete('cascade');

                $table->dropColumn('userType');
                $table->dropColumn('disignation');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {

            // Drop foreign key constraints
            $table->dropForeign(['usertype_id']);
            $table->dropForeign(['designation_id']);

            // Drop columns
            $table->dropColumn('usertype_id');
            $table->dropColumn('designation_id');

            $table->string('userType');
            $table->string('disignation');
        });
    }
};
