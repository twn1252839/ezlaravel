<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
  use HasFactory;
  // 如果不走mysql資料表名稱 則可以以下自定義

  // 指定表格名為 tasks
  // protected $table = "tasks";

  // 指定 done_at 為 Carbon型別
  // protected $dates = ["done_at"];

  // 指定主鍵為 task_id
  // protected $primaryKey = "task_id";

  // 流水號遞增關閉 改文字形主鍵
  // protected $incrementing = false;

  // 不使用 created_at 和 updated_at
  // protected $timestamps = false;

  public function cat()
  {
    // 關聯
    return $this->belongsTo(Cat::class);
  }
}