<?php

namespace Database\Seeders;

use App\Models\Notice;
use App\Models\NoticeStatus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NoticeStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        NoticeStatus::create([
            'name'=>'Pendiente'
        ]);
        NoticeStatus::create([
            'name'=>'Aceptado'
        ]);
        NoticeStatus::create([
            'name'=>'Rechazado'
        ]);
    }
}
