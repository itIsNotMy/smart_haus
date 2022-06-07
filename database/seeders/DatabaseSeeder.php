<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Type;
use App\Models\Equipment;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $types = [
            ['name'=>'TP-Link TL-WR74', 'mask_sireal_number'=>'XXAAAAAXAA'],
            ['name'=>'D-Link DIR-300', 'mask_sireal_number'=>'NXXAAXZXaa'],
            ['name'=>'D-Link DIR-300 E', 'mask_sireal_number'=>'NAAAAXZXXX'],
        ];
        
        Type::insert($types);
        Equipment::insert(['code_type'=>1, 'sireal_number'=>'2112213213213213']);
    }
}
