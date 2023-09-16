<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Animal;
use App\Models\CaseAnimal;
use App\Models\Image;
use App\Models\Post;
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
        $this->call(UserSeeder::class);
        $this->call(StatusSeeder::class);

        //Carga factories
        $postCol = Post::factory(15)->create();

        $cases = CaseAnimal::factory(15)->create();
        $i = 0;
        foreach ($cases as $case) {
            ++$i;
            $case->post_id = $i;
            $case->save();
            Animal::factory(1)->create([
                'case_animal_id' => $i,
            ]);
        }
        foreach ($postCol as $post) {
            Image::factory(1)->create([
                'imageable_id' => $post->id,
                'imageable_type' => 'App\Models\Post'
            ]);
            $post->save();
        }
    }
}
