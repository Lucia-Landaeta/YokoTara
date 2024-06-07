<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Animal;
use App\Models\CaseAnimal;
use App\Models\Donation;
use App\Models\Image;
use App\Models\Notice;
use App\Models\NoticeStatus;
use App\Models\Post;
use App\Models\RecordCase;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Manejo de la contenido storage
        Storage::deleteDirectory('public/posts'); //Elimina la carpeta post dentro de storage si es que ya existe para borrar las imagenes inecesarias
        Storage::makeDirectory('public/posts');

        // Llamada a seeders
        $this->call(LocalitySeeder::class);
        $this->call(RolePermissionSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(StatusSeeder::class);
        $this->call(PostSeeder::class);
        $this->call(NoticeStatusSeeder::class);
        $this->call(NoticeRecordSeeder::class);

        Donation::create([
            'transaction_id' => '67605820321',
            'date' => date('2023-11-28'),
            'amount' => 2000
        ]);
        Donation::create([
            'transaction_id' => '67538365197',
            'date' => date('2023-11-27'),
            'amount' => 300
        ]);
        Donation::create([
            'transaction_id' => '67671209876',
            'date' => date('2023-11-26'),
            'amount' => 500
        ]);
        Donation::create([
            'transaction_id' => '67485916449',
            'date' => date('2023-11-26'),
            'amount' => 4000
        ]);
        

        //Carga factories
        // $postCol = Post::factory(80)->create();

        // $cases = CaseAnimal::factory(80)->create();
        // $i = 0;
        // foreach ($cases as $case) {
        //     ++$i;
        //     $case->post_id = $i;
        //     $case->save();
        //     Animal::factory(1)->create([
        //         'case_animal_id' => $i,
        //     ]);
        // }
        // foreach ($postCol as $post) {
        //     Image::factory(1)->create([
        //         'imageable_id' => $post->id,
        //         'imageable_type' => 'App\Models\Post'
        //     ]);
        //     $post->save();
        // }
        // Notice::factory(4)->create();
        // records
    }
}
