<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('tasks', function (Blueprint $table) {
      $table->increments('id');
      $table->string('name', 50);

      $table->integer('days')->unsigned();
      $table->integer('hours')->unsigned();

      $table->integer('project_id');
      $table->foreign('user_id')->references('id')->on('projects');

      $table->integer('company_id')->unsigned();
      $table->foreign('company_id')->references('id')->on('companies');

      $table->integer('user_id');
      $table->foreign('user_id')->references('id')->on('users');

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
    Schema::dropIfExists('tasks');
  }
}
