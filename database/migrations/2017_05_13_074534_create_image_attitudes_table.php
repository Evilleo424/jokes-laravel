<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImageAttitudesTable extends Migration {
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('image_attitudes', function (Blueprint $table) {
      $table->increments('id');
      $table->unsignedInteger('image_id');
      $table->unsignedInteger('user_id');
      $table->tinyInteger('attitude')->default(0)->comment('0 none, 1 up, -1 down');
      $table->boolean('collected')->default(false);
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
    Schema::dropIfExists('image_attitudes');
  }
}
