<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FoldersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('folders')->insert([
            'id' => 3,
            'fk_folder' => 1,
            'fk_user' => 1,
            'name' => 'LPJ/PTP',
            'comment' => 'Pelabuhan Tanjung Pelepas',
            'defaultAccess' => '0',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
