<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
      $table->id();
      $table->string('title', 100);
      $table->integer('salary')->default(1000);
      $table->text('desc')->nullable();
      // 關聯 constrained 因為前方使用定義名稱
      $table->foreignId('cat_id')->constrained();
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
    Schema::dropIfExists('tasks');
    // 關聯
    Schema::table('tasks', function (Blueprint $table) {
      $table->dropForeign(['cat_id']);
    });
  }
}