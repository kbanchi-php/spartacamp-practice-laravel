<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->insert([
            [
              'id' => 1,
              'name' => 'Apple',
            ],
            [
                'id' => 2,
                'name' => 'Lemon',
              ],
            [
                'id' => 3,
                'name' => 'Strawberry',
              ],
          ]);
    }
}
