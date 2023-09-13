<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Locality;
use App\Models\Province;
class LocalitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Province::create([
            'name'=>'Neuquén'
        ]);
        Province::create([
            'name'=>'Rio Negro'
        ]);

        $localities = [
            ['name'=>'Neuquén','province_id'=>1],
            ['name'=>'Plottier','province_id'=>1],
            ['name'=>'Senillosa','province_id'=>1],
            ['name'=>'Cutral Co','province_id'=>1],
            ['name'=>'Plaza Huincul','province_id'=>1],
            ['name'=>'Zapala','province_id'=>1],
            ['name'=>'Cipolletti','province_id'=>2],
            ['name'=>'Gral.Roca','province_id'=>2],
            ['name'=>'Fernandez Oro','province_id'=>2],
        ];
        foreach ($localities as $locality) {
            Locality::create($locality);
        }
    }
}
