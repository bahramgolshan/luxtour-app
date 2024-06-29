<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            // ['key', 'value'],
            ['address', '123 Street, New York, USA'],
            ['phone', '+1 437 313 0022'],
            ['email', 'info@luxtour.com'],
            ['instagram', '#'],
            ['facebook', '#'],
            ['twitter', '#'],
            ['youtube', '#'],
        ];

        foreach ($data as $item) {
            DB::table('settings')->insert([
                'key' => $item[0],
                'value' => $item[1],
            ]);
        }
    }
}
