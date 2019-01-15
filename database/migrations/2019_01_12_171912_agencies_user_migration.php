<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AgenciesUserMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agency_users', function(Blueprint $table){
            $table->increments('id');
            $table->integer('role_id')->length(11);
            $table->string('name', 191);
            $table->string('email', 191)->unique();
            $table->string('avatar',191);
            $table->string('password', 191);
            $table->rememberToken();
            $table->timestamps();
            $table->integer('agency_id')->length(11);
            $table->integer('office_id')->length(11);
            $table->integer('email_verified')->length(11);
            $table->string('status',20);
            $table->text('setting');
            $table->string('timezone');
            $table->string('designation');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('agency_users');
    }
}
