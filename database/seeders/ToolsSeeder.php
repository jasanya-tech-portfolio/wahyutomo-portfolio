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
                'status_id' => 1
            ],
            [
                'logo' => 'default.png',
                'name' => 'Laravel',
                'desc' => '',
                'status_id' => 1
            ],
            [
                'logo' => 'default.png',
                'name' => 'Filament',
                'desc' => '',
                'status_id' => 1
            ],
            [
                'logo' => 'default.png',
                'name' => 'Tailwind',
                'desc' => '',
                'status_id' => 1
            ],
            [
                'logo' => 'default.png',
                'name' => 'Python',
                'desc' => '',
                'status_id' => 1
            ],
            [
                'logo' => 'default.png',
                'name' => 'REST API',
                'desc' => '',
                'status_id' => 1
            ],
        ];

        Tools::insert($listTools);
    }
}
