<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('jobs', function (Blueprint $table) {
      $table->bigIncrements('id');

      $table->timestamps();
    });

    Schema::create('jobs', function (Blueprint $table) {
      $table->id(); //生成 id 欄位 是個流水號
      $table->string('title', 100);
      $table->integer('salary')->default(1000);
      $table->text('desc')->nullable();
      $table->timestamp('start_at');
      $table->timestamps();
      //
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('jobs');
  }
}