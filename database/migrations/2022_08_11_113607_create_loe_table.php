<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoeTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('loe', function (Blueprint $table) {
      // 練習
      $table->id();
      $table->string('title', 100);
      $table->integer('salary')->default(1000);
      $table->text('desc')->nullable();
      $table->timestamp('start_at');
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
    Schema::dropIfExists('loe');
  }
}