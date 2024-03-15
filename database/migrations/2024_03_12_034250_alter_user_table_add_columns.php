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
        Schema::table('users', function (Blueprint $table) {
            $table->string('role');
            $table->string('phone');
            $table->integer('age')->nullable();
            $table->string('profession')->nullable();
            $table->text('medical_history')->nullable();
            $table->string('height')->nullable();
            $table->string('weight')->nullable();
            $table->string('gender');
            $table->text('address')->nullable();
            $table->string('user_type');
            $table->string('shift')->nullable();
            $table->date('date_of_joining')->nullable();
            $table->string('status')->default('active');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('role');
            $table->dropColumn('user_type');
            $table->dropColumn('shift');
            $table->dropColumn('phone');
            $table->dropColumn('gender');
            $table->dropColumn('address');
            $table->dropColumn('date_of_joining');
            $table->dropColumn('status');
            $table->dropColumn('age');
            $table->dropColumn('gender');
            $table->dropColumn('address');
            $table->dropColumn('date_of_joining');
            $table->dropColumn('status');
        });
    }
};
