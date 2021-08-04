<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableAdmissions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('admissions');

        Schema::create('admissions', function (Blueprint $table) {
            $table->id();
            $table->string('name', 60);
            $table->string('phone', 60)->nullable();
            $table->string('email', 60);
            $table->string('address', 120)->nullable();
            $table->string('school', 120)->nullable();
            $table->string('mode_of_study', 120)->nullable();
            $table->string('specialized', 120)->nullable();
            $table->string('status', 60)->default('unread');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admissions');
    }
}
