<?php

namespace Database\Seeders;

use App\Models\Tools;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ToolsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $listTools = [
            [
                'logo' => 'default.png',
                'name' => 'PHP',
                'desc' => '',
                'percentage' => '80',
                'status_id' => 1
            ],
            [
                'logo' => 'default.png',
                'name' => 'Laravel',
                'desc' => '',
                'percentage' => '90',
                'status_id' => 1
            ],
            [
                'logo' => 'default.png',
                'name' => 'Filament',
                'desc' => '',
                'percentage' => '95',
                'status_id' => 1
            ],
            [
                'logo' => 'default.png',
                'name' => 'Tailwind',
                'desc' => '',
                'percentage' => '85',
                'status_id' => 1
            ],
            [
                'logo' => 'default.png',
                'name' => 'Python',
                'desc' => '',
                'percentage' => '85',
                'status_id' => 1
            ],
            [
                'logo' => 'default.png',
                'name' => 'REST API',
                'desc' => '',
                'percentage' => '80',
                'status_id' => 1
            ],
        ];

        Tools::insert($listTools);
    }
}
