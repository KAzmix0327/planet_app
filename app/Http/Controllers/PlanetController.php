<?php

namespace App\Http\Controllers;

use App\Models\planet;
use App\Http\Requests\PlanetRequest;

class PlanetController extends Controller
{
    // indexページへ移動
    public function index()
    {
        // モデル名::テーブル全件取得
        $planets = Planet::all();
        // memosティレクトリーの中のindexページを指定し、memosの連想配列を代入
        return view('planets.index', ['planets' => $planets]);
    }

    // createページへ移動
    public function create()
    {
        return view('planets.create');
    }

    // storeページへ移動
    public function store(PlanetRequest $request)
    {
        // インスタンスの作成
        $planet = new Planet;

        // 値の用意
        $planet->name = $request->name;
        $planet->en_name = $request->en_name;
        $planet->radius = $request->radius;
        $planet->weight = $request->weight;

        // インスタンスに値を設定して保存
        $planet->save();

        // 登録したらindexに戻る
        return redirect('/planets');
    }

    // showページへ移動
    public function show($id)
    {
        $planet = Planet::find($id);
        return view('planets.show', ['planet' => $planet]);
    }

    // editページへ移動
    public function edit($id)
    {
        $planet = Planet::find($id);
        return view('planets.edit', ['planet' => $planet]);
    }

    // updateページへ移動
    public function update(planetRequest $request, $id)
    {
        // ここはidで探して持ってくる以外はstoreと同じ
        $planet = Planet::find($id);

        // 値の用意
        $planet->name = $request->name;
        $planet->en_name = $request->en_name;
        $planet->radius = $request->radius;
        $planet->weight = $request->weight;

        // 保存
        $planet->save();

        // 登録したらindexに戻る
        return redirect('/planets');
    }

    // destroyページへ移動
    public function destroy($id)
    {
        $planet = Planet::find($id);
        $planet->delete();
        return redirect('/planets');
    }
}
