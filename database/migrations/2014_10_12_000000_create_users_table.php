<?php
// Programmer Name: Ms. Lim Jia Yong, Project Manager
// Description: Definition of User table in SQLite database
// Edited on: 3 March 2022

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->string('mobil')->nullable();
            $table->string('address_1')->nullable();
            $table->string('address_2')->nullable();
            $table->string('postacode')->nullable();
            $table->string('state')->nullable();
            $table->string('area')->nullable();
            $table->string('country')->nullable();
            $table->string('stateRegion')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->default(0);
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            $table->string('role')->default('customer'); // customer, kitchenStaff, admin, manager
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
