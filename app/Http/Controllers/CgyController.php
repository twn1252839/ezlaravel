<?php

namespace App\Http\Controllers;

use App\Models\Cgy;
use Illuminate\Http\Request;

class CgyController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    //
    return '已儲存';
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    //
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    $newCgy = new Cgy;
    $newCgy->title = '分類';
    $newCgy->sort = 1;
    $newCgy->enabled = true;
    $newCgy->save();

    return redirect('/cgies');
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\Cgy  $cgy
   * @return \Illuminate\Http\Response
   */

  public function show(Request $request, Cgy $cgy)
  {
    // 找到ID為1的資料
    // $cgy = Cgy::find(1);

    // 找到ID為1的資料，找不到丟出錯誤
    // $cgy = Cgy::findOrFail(1);

    // 設定查詢條件，並回傳第一筆資料
    // $cgy = Cgy::where('title', '作品')->first();
    // $cgy = Cgy::where('enabled', 1)->first();

    //查詢全部
    // $cgy = Cgy::all();
    return $cgy;

    // $sum = Cgy::sum('sort');
    // return $sum;
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\Cgy  $cgy
   * @return \Illuminate\Http\Response
   */
  public function edit(Cgy $cgy)
  {
    //

  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\Cgy  $cgy
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, Cgy $cgy)
  {
    // 這邊照操同學 尚未確認成功與否
    $cgy->title = '新消息';
    $cgy->save();

    return redirect("/show/{$cgy->id}");
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\Cgy  $cgy
   * @return \Illuminate\Http\Response
   */
  public function destroy(Cgy $cgy)
  {
    // 這邊還有確定寫法
    $cgy->delete();
    // Task::destroy($cgy);
    $cgy->save();
    return redirect('/cgies');
  }
}