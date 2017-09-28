<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->boolean('is_admin')->default(false);
            $table->boolean('is_agent')->default(false);
            $table->rememberToken();
            $table->timestamps();
        });

        App\User::create([
            'name' => 'Michael Foote',
            'email' => 'mfoote@spineatl.com',
            'password' => bcrypt('SCAaphbc42'),
            'is_admin' => true,
        ]);
        App\User::create([
            'name' => 'Wyatt Foote',
            'email' => 'wfoote@spineatl.com',
            'password' => bcrypt('SCAaphbc42'),
            'is_agent' => true,
        ]);
//        App\User::create([
//            'name' => 'Brandon Jennings',
//            'email' => 'bjennings@spineatl.com',
//            'password' => bcrypt('SCAaphbc42'),
//            'is_agent' => true,
//        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
