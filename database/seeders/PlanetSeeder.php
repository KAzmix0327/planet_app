<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlanetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
// 一件だけinsertする
        DB::table('planets')->insert([
            'name' => '水星',
            'en_name' => 'MERCURY',
            'radius' => '2439',
            'weight' => '3310',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        # paramに配列を代入
        $param = [
            [
                'name' => '金星',
                'en_name' => 'VENUS',
                'radius' => '6052',
                'weight' => '48700',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ];
        # DB::table->insertでレコードの登録
        DB::table('planets')->insert($param);
    }
}
