<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTests01Table extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('tesets01', function (Blueprint $table) {
      $table->id(); //生成 id 欄位 是個流水號
      $table->string('title', 100);
      $table->integer('salary')->default(1000);
      $table->boolean('enabled')->default(true);
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
    Schema::dropIfExists('tesets01');
  }
}
