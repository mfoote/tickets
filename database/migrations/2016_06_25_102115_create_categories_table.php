<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });

        $cats = [
            '[Centricity] Schedule Template Change',
            '[Centricity] Password Issue',
            '[Centricity] User Permissions',
            '[Centricity] New Employee',
            '[Centricity] Other'
        ];

        foreach ($cats as $cat) {
            \App\Category::create(['name' => $cat]);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('categories');
    }
}
