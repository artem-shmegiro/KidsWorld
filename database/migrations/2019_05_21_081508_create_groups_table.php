<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('groups', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('educator1')->unsigned();
            $table->integer('educator2')->unsigned()->nullable();
            $table->integer('assistant')->unsigned()->nullable();
            $table->text('slogan')->nullable();
            $table->foreign('educator1')->references('id')->on('workers');
            $table->foreign('educator2')->references('id')->on('workers');
            $table->foreign('assistant')->references('id')->on('workers');
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
        Schema::dropIfExists('groups');
    }
}
