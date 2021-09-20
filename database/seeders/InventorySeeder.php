<?php

namespace Database\Seeders;

use App\Models\Inventory;
use Illuminate\Database\Seeder;

class InventorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Inventory::create([
            'user_id' => 1,
            'name' => 'Zulrah',
            'data' => file_get_contents('./resources/seed-data/zulrah.json'),
            'likes' => 31,
            'dislikes' => 3
        ]);
        Inventory::create([
            'user_id' => 1,
            'name' => 'Jad',
            'data' => file_get_contents('./resources/seed-data/jad.json'),
            'likes' => 456,
            'dislikes' => 45
        ]);
        Inventory::create([
            'user_id' => 2,
            'name' => 'Vorkath',
            'data' => file_get_contents('./resources/seed-data/vorkath.json'),
            'likes' => 11,
            'dislikes' => 1
        ]);
        Inventory::create([
            'user_id' => 2,
            'name' => 'Tree Run (normal trees)',
            'data' => file_get_contents('./resources/seed-data/treerun.json'),
            'likes' => 1,
            'dislikes' => 0
        ]);
    }
}
