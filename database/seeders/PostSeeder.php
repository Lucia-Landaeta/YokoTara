<?php

namespace Database\Seeders;

use App\Models\Animal;
use App\Models\CaseAnimal;
use App\Models\Image;
use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Post::factory(1)->create([
            'title' => 'Se perdió Sonia',
            'description' => 'Se perdio el Lunes por la mañana cuando salio a hacer sus necesidades, es una gata adulta muy asustadiza. No esta acostumbrada a estar en la calle.',
            'date_publish' => date('2022-11-05'),
            'type' => 'Perdido',
            'status_id' => 1
        ]);
        CaseAnimal::create([
            'user_id' => null,
            'date' => date('2022-11-05'),
            'pseudonym' => 'Sonia adulta gris',
            'case_animal_id' => null,
            'post_id' => 1,
            'status_id' => 1
        ]);
        Animal::create([
            'case_animal_id' => 1,
            'type_animal' => 'Gato',
            'gender' => 'Hembra',
            'stage' => 'Adulto',
        ]);
        Image::factory(1)->create([
            'imageable_id' => 1,
            'imageable_type' => 'App\Models\Post'
        ]);
        Post::factory(1)->create([
            'title' => 'Buscamos a Ramiro',
            'description' => 'Ramiro se perdio el el sabado por la noche, quedo el porton abierto y su dueña no se dio cuenta, es un cachorro muy jugeton que nunca estuvo fuera de casa antes.',
            'date_publish' => date('2022-10-19'),
            'type' => 'Perdido',
            'status_id' => 1
        ]);
        CaseAnimal::create([
            'user_id' => null,
            'date' => date('2022-10-19'),
            'pseudonym' => 'Ramiro cachorrito',
            'case_animal_id' => null,
            'post_id' => 2,
            'status_id' => 1
        ]);
        Animal::create([
            'case_animal_id' => 2,
            'type_animal' => 'Perro',
            'gender' => 'Macho',
            'stage' => 'Cachorro',
        ]);
        Image::factory(1)->create([
            'imageable_id' => 2,
            'imageable_type' => 'App\Models\Post'
        ]);
        Post::factory(1)->create([
            'title' => 'Buscando a Nemo',
            'description' => 'Nemo es un conejito adulto que rompio su jaulita y escapo, es blanco con manchas negras, con una cicatriz en la oreja derecha.',
            'date_publish' => date('2022-03-22'),
            'type' => 'Perdido',
            'status_id' => 1
        ]);
        CaseAnimal::create([
            'user_id' => null,
            'date' => date('2022-03-22'),
            'pseudonym' => 'Buscando a nemo',
            'case_animal_id' => null,
            'post_id' => 3,
            'status_id' => 1
        ]);
        Animal::create([
            'case_animal_id' => 3,
            'type_animal' => 'Conejo',
            'gender' => 'Macho',
            'stage' => 'Adulto',
        ]);
        Image::factory(1)->create([
            'imageable_id' => 3,
            'imageable_type' => 'App\Models\Post'
        ]);
        Post::factory(1)->create([
            'title' => 'Segunda oportunidad para este viejito',
            'description' => 'En es un viejito callejero que lleva varios años viviendo en la terminal. Es muy docil y tranquilo, necesita de un patio cerrado y comida especial.',
            'date_publish' => date('2023-06-22'),
            'type' => 'Adopción',
            'status_id' => 1
        ]);
        CaseAnimal::create([
            'user_id' => null,
            'date' => date('2023-06-22'),
            'pseudonym' => 'Toto terminal',
            'case_animal_id' => null,
            'post_id' => 4,
            'status_id' => 1
        ]);
        Animal::create([
            'case_animal_id' => 4,
            'type_animal' => 'Perro',
            'gender' => 'Macho',
            'stage' => 'Adulto',
        ]);
        Image::factory(1)->create([
            'imageable_id' => 4,
            'imageable_type' => 'App\Models\Post'
        ]);
        Post::factory(1)->create([
            'title' => 'Una familia para Lolo',
            'description' => 'Lolo fue abandonado por su familia despues de una mudanza, es muy jugueton y no esta acostumbrado a convivivr con otras mascotas.',
            'date_publish' => date('2023-11-03'),
            'type' => 'Adopción',
            'status_id' => 1
        ]);
        CaseAnimal::create([
            'user_id' => null,
            'date' => date('2023-11-03'),
            'pseudonym' => 'Lolo abandonado',
            'case_animal_id' => null,
            'post_id' => 5,
            'status_id' => 1
        ]);
        Animal::create([
            'case_animal_id' => 5,
            'type_animal' => 'Conejo',
            'gender' => 'Macho',
            'stage' => 'Joven',
        ]);
        Image::factory(1)->create([
            'imageable_id' => 5,
            'imageable_type' => 'App\Models\Post'
        ]);
        Post::factory(1)->create([
            'title' => 'Adopción responsable para Atenea',
            'description' => 'Atenea es una cachorrita que fue abandonada en la ruta 22. Sufrio una fractura de cadera por lo que no camina bien y necesita de cuidados especiales para poder hacer sus necesidades. Es un caso de adopción super responsable que necesita de una gran corazón y compromiso.',
            'date_publish' => date('2023-12-03'),
            'type' => 'Adopción',
            'status_id' => 1
        ]);
        CaseAnimal::create([
            'user_id' => null,
            'date' => date('2023-12-03'),
            'pseudonym' => 'Atenea especial',
            'case_animal_id' => null,
            'post_id' => 6,
            'status_id' => 1
        ]);
        Animal::create([
            'case_animal_id' => 6,
            'type_animal' => 'Perro',
            'gender' => 'Hembra',
            'stage' => 'Cachorro',
        ]);
        Image::factory(1)->create([
            'imageable_id' => 6,
            'imageable_type' => 'App\Models\Post'
        ]);
        Post::factory(1)->create([
            'title' => 'Se busca a su familia',
            'description' => 'Este gatito de aprox 5 meses apareció en el patio de una vecina muy hambriento y sucio, es muy docil y cariñoso por lo que se cree que tiene dueño. Tiene una cicatriz en su patita delantera izquierda',
            'date_publish' => date('2023-10-23'),
            'type' => 'Encontrado',
            'status_id' => 1
        ]);
        CaseAnimal::create([
            'user_id' => null,
            'date' => date('2023-10-23'),
            'pseudonym' => 'Gatito cicatriz pata izq',
            'case_animal_id' => null,
            'post_id' => 7,
            'status_id' => 1
        ]);
        Animal::create([
            'case_animal_id' => 7,
            'type_animal' => 'Gato',
            'gender' => 'Macho',
            'stage' => 'Cachorro',
        ]);
        Image::factory(1)->create([
            'imageable_id' => 7,
            'imageable_type' => 'App\Models\Post'
        ]);
        Post::factory(1)->create([
            'title' => 'Sofi busca un hogar',
            'description' => 'Sofi es la ultima de una camada de 6 perritos abandanados, es timida y asustadiza pero muy cariñosa cuando entra en confianza. Necesita de paciencia y preferentemente estar sola asta se se la haya adaptado correctamente a su nuevo hogar.',
            'date_publish' => date('2023-08-23'),
            'type' => 'Adopción',
            'status_id' => 1
        ]);
        CaseAnimal::create([
            'user_id' => null,
            'date' => date('2023-08-23'),
            'pseudonym' => 'Sofi ultima',
            'case_animal_id' => null,
            'post_id' => 8,
            'status_id' => 1
        ]);
        Animal::create([
            'case_animal_id' => 8,
            'type_animal' => 'Perro',
            'gender' => 'Hembra',
            'stage' => 'Cachorro',
        ]);
        Image::factory(1)->create([
            'imageable_id' => 8,
            'imageable_type' => 'App\Models\Post'
        ]);

        Post::factory(1)->create([
            'title' => 'Perdida gatita Ichima',
            'description' => 'Se perdio el Lunes por la mañana cuando salio a hacer sus necesidades, es una gata adulta muy asustadiza. No esta acostumbrada a estar en la calle.',
            'date_publish' => date('2022-11-05'),
            'type' => 'Perdido',
            'status_id' => 1
        ]);
        CaseAnimal::create([
            'user_id' => null,
            'date' => date('2020-11-05'),
            'pseudonym' => 'Ichima',
            'case_animal_id' => null,
            'post_id' => 9,
            'status_id' => 1
        ]);
        Animal::create([
            'case_animal_id' => 9,
            'type_animal' => 'Gato',
            'gender' => 'Hembra',
            'stage' => 'Cachorro',
        ]);
        Image::factory(1)->create([
            'imageable_id' => 9,
            'imageable_type' => 'App\Models\Post'
        ]);
        Post::factory(1)->create([
            'title' => 'Se busca a Firu',
            'description' => 'Firu se perdio el el sabado por la noche, quedo el porton abierto y su dueña no se dio cuenta, es un cachorro muy jugeton que nunca estuvo fuera de casa antes.',
            'date_publish' => date('2020-10-19'),
            'type' => 'Perdido',
            'status_id' => 1
        ]);
        CaseAnimal::create([
            'user_id' => null,
            'date' => date('2020-10-19'),
            'pseudonym' => 'Firu cachorrito',
            'case_animal_id' => null,
            'post_id' => 10,
            'status_id' => 1
        ]);
        Animal::create([
            'case_animal_id' => 10,
            'type_animal' => 'Perro',
            'gender' => 'Macho',
            'stage' => 'Cachorro',
        ]);
        Image::factory(1)->create([
            'imageable_id' => 10,
            'imageable_type' => 'App\Models\Post'
        ]);
        Post::factory(1)->create([
            'title' => 'Ayuda para encontrar a Kiku',
            'description' => 'Kiku es un conejito adulto que rompio su jaulita y escapo, es blanco con manchas negras, con una cicatriz en la oreja derecha.',
            'date_publish' => date('2020-03-22'),
            'type' => 'Perdido',
            'status_id' => 1
        ]);
        CaseAnimal::create([
            'user_id' => null,
            'date' => date('2020-03-22'),
            'pseudonym' => 'Conejo Kiku',
            'case_animal_id' => null,
            'post_id' => 11,
            'status_id' => 1
        ]);
        Animal::create([
            'case_animal_id' => 11,
            'type_animal' => 'Conejo',
            'gender' => 'Macho',
            'stage' => 'Cachorro',
        ]);
        Image::factory(1)->create([
            'imageable_id' => 11,
            'imageable_type' => 'App\Models\Post'
        ]);
        Post::factory(1)->create([
            'title' => 'Un hogar para Gandalf',
            'description' => 'Gandalf es un viejito callejero que lleva varios años viviendo en la calle. Es muy docil y tranquilo, necesita de un patio cerrado y comida especial.',
            'date_publish' => date('2020-06-22'),
            'type' => 'Adopción',
            'status_id' => 1
        ]);
        CaseAnimal::create([
            'user_id' => null,
            'date' => date('2020-06-22'),
            'pseudonym' => 'Gandalfa jubilado',
            'case_animal_id' => null,
            'post_id' => 12,
            'status_id' => 1
        ]);
        Animal::create([
            'case_animal_id' => 12,
            'type_animal' => 'Perro',
            'gender' => 'Macho',
            'stage' => 'Adulto',
        ]);
        Image::factory(1)->create([
            'imageable_id' => 12,
            'imageable_type' => 'App\Models\Post'
        ]);
        Post::factory(1)->create([
            'title' => 'Havana busca una familia amorosa',
            'description' => 'Havana fue abandonado por su familia, es muy jugueton y esta acostumbrado a convivivr con otras mascotas y con niños.',
            'date_publish' => date('2020-11-03'),
            'type' => 'Adopción',
            'status_id' => 1
        ]);
        CaseAnimal::create([
            'user_id' => null,
            'date' => date('2020-11-03'),
            'pseudonym' => 'La Havana',
            'case_animal_id' => null,
            'post_id' => 13,
            'status_id' => 1
        ]);
        Animal::create([
            'case_animal_id' => 13,
            'type_animal' => 'Gato',
            'gender' => 'Macho',
            'stage' => 'Joven',
        ]);
        Image::factory(1)->create([
            'imageable_id' => 13,
            'imageable_type' => 'App\Models\Post'
        ]);
        Post::factory(1)->create([
            'title' => 'Adopción responsable para Jujuy',
            'description' => 'Jujuy es una cachorrita abandonada en la ruta 7. Sufrio desnutrición por lo que no camina bien y necesita de cuidados especiales para poder hacer sus necesidades. Es un caso de adopción super responsable que necesita de una gran corazón y compromiso.',
            'date_publish' => date('2020-12-03'),
            'type' => 'Adopción',
            'status_id' => 1
        ]);
        CaseAnimal::create([
            'user_id' => null,
            'date' => date('2020-12-03'),
            'pseudonym' => 'Jujuy especial',
            'case_animal_id' => null,
            'post_id' => 14,
            'status_id' => 1
        ]);
        Animal::create([
            'case_animal_id' => 14,
            'type_animal' => 'Gato',
            'gender' => 'Hembra',
            'stage' => 'Cachorro',
        ]);
        Image::factory(1)->create([
            'imageable_id' => 14,
            'imageable_type' => 'App\Models\Post'
        ]);
        Post::factory(1)->create([
            'title' => 'Atención familia de Gago',
            'description' => 'Este gatito apareció en el patio de una escuela muy hambriento y sucio, es muy docil y cariñoso, tiene un collar con el nombre Gago.',
            'date_publish' => date('2020-10-23'),
            'type' => 'Encontrado',
            'status_id' => 1
        ]);
        CaseAnimal::create([
            'user_id' => null,
            'date' => date('2020-10-23'),
            'pseudonym' => 'Gago collar',
            'case_animal_id' => null,
            'post_id' => 15,
            'status_id' => 1
        ]);
        Animal::create([
            'case_animal_id' => 15,
            'type_animal' => 'Gato',
            'gender' => 'Macho',
            'stage' => 'Cachorro',
        ]);
        Image::factory(1)->create([
            'imageable_id' => 15,
            'imageable_type' => 'App\Models\Post'
        ]);
        Post::factory(1)->create([
            'title' => 'Bulma busca un nuevo hogar',
            'description' => 'Bulma es la ultima viejita abandanada, es timida y asustadiza pero muy cariñosa cuando entra en confianza. Necesita de paciencia y preferentemente estar sola asta se se la haya adaptado correctamente a su nuevo hogar.',
            'date_publish' => date('2020-08-23'),
            'type' => 'Adopción',
            'status_id' => 1
        ]);
        CaseAnimal::create([
            'user_id' => null,
            'date' => date('2020-08-23'),
            'pseudonym' => 'Bulma viejita',
            'case_animal_id' => null,
            'post_id' => 16,
            'status_id' => 1
        ]);
        Animal::create([
            'case_animal_id' => 16,
            'type_animal' => 'Perro',
            'gender' => 'Hembra',
            'stage' => 'Adulto',
        ]);
        Image::factory(1)->create([
            'imageable_id' => 16,
            'imageable_type' => 'App\Models\Post'
        ]);

        Post::factory(1)->create([
            'title' => 'Conejito fugado',
            'description' => 'Este Lunes por la mañana aparecio en la plaza central un conejito, es muy asustadizo y esta bien cuidado. Se escapo varias veces desde que lo encontraron por lo que es urgente dar con su familia',
            'date_publish' => date('2022-11-25'),
            'type' => 'Encontrado',
            'status_id' => 1
        ]);
        CaseAnimal::create([
            'user_id' => null,
            'date' => date('2022-11-25'),
            'pseudonym' => 'Conejo fugado',
            'case_animal_id' => null,
            'post_id' => 17,
            'status_id' => 1
        ]);
        Animal::create([
            'case_animal_id' => 17,
            'type_animal' => 'Conejo',
            'gender' => 'Macho',
            'stage' => 'Joven',
        ]);
        Image::factory(1)->create([
            'imageable_id' => 17,
            'imageable_type' => 'App\Models\Post'
        ]);
        Post::factory(1)->create([
            'title' => 'Buscamos una familia amorosa para hermanitos',
            'description' => 'Sole y Fito son hermanitos que fueron abandonados en una plaza son muy cariñosos y apegados entre ellos por lo que sebusca adopción juntos.',
            'date_publish' => date('2023-09-19'),
            'type' => 'Perdido',
            'status_id' => 1
        ]);
        CaseAnimal::create([
            'user_id' => null,
            'date' => date('2023-09-19'),
            'pseudonym' => 'Hermanitos sole fito',
            'case_animal_id' => null,
            'post_id' => 18,
            'status_id' => 1
        ]);
        Animal::create([
            'case_animal_id' => 18,
            'type_animal' => 'Perro',
            'gender' => 'Macho',
            'stage' => 'Cachorro',
        ]);
        Image::factory(1)->create([
            'imageable_id' => 18,
            'imageable_type' => 'App\Models\Post'
        ]);
        Post::factory(1)->create([
            'title' => 'Buscamos a Nino',
            'description' => 'Nino es un gato adulto que rompio el mosquitero de su casa y escapo, es blanco con manchas negras, con una cicatriz en la oreja derecha.',
            'date_publish' => date('2022-05-25'),
            'type' => 'Perdido',
            'status_id' => 1
        ]);
        CaseAnimal::create([
            'user_id' => null,
            'date' => date('2022-05-25'),
            'pseudonym' => 'Busca a Nino',
            'case_animal_id' => null,
            'post_id' => 19,
            'status_id' => 1
        ]);
        Animal::create([
            'case_animal_id' => 19,
            'type_animal' => 'Gato',
            'gender' => 'Macho',
            'stage' => 'Joven',
        ]);
        Image::factory(1)->create([
            'imageable_id' => 19,
            'imageable_type' => 'App\Models\Post'
        ]);
        Post::factory(1)->create([
            'title' => 'Segunda oportunidad',
            'description' => 'Él es un callejero que lleva varios años viviendo en la calle. Es muy docil y tranquilo, sufre diabetes por lo que necesita de un patio cerrado y comida especial.',
            'date_publish' => date('2022-03-17'),
            'type' => 'Adopción',
            'status_id' => 1
        ]);
        CaseAnimal::create([
            'user_id' => null,
            'date' => date('2022-03-17'),
            'pseudonym' => 'Diabetes can',
            'case_animal_id' => null,
            'post_id' => 20,
            'status_id' => 1
        ]);
        Animal::create([
            'case_animal_id' => 20,
            'type_animal' => 'Perro',
            'gender' => 'Macho',
            'stage' => 'Adulto',
        ]);
        Image::factory(1)->create([
            'imageable_id' => 20,
            'imageable_type' => 'App\Models\Post'
        ]);
        Post::factory(1)->create([
            'title' => 'Cachorrita especial busca una familia',
            'description' => 'Ella es una cachorrita que enfermo de moquillo y fue abandonada en la veterinaria, debido a la enfermedad quedo con angunas secuelas motrices y con una dieta especial que necesita para desarrollarse correctamente. Busca una familia amorosa y compromotida para corresponder con mucho amor y compañia.',
            'date_publish' => date('2023-12-03'),
            'type' => 'Adopción',
            'status_id' => 1
        ]);
        CaseAnimal::create([
            'user_id' => null,
            'date' => date('2023-12-03'),
            'pseudonym' => 'Cuqui moquillo',
            'case_animal_id' => null,
            'post_id' => 21,
            'status_id' => 1
        ]);
        Animal::create([
            'case_animal_id' => 21,
            'type_animal' => 'Perro',
            'gender' => 'Hembra',
            'stage' => 'Cachorro',
        ]);
        Image::factory(1)->create([
            'imageable_id' => 21,
            'imageable_type' => 'App\Models\Post'
        ]);
        Post::factory(1)->create([
            'title' => 'Adopción responsable y comprometida',
            'description' => 'Este gatito fue rescatado de ser atacado por un grupo de perros. Perdio su patita derecha delantera pero no tiene ningun problema que requiera de atención especial, mas alla de vigilania ya que no cuenta con la misma movilidad que otros gatitos. Es muy amoroso y activo, y no se lleva bien con los perros.',
            'date_publish' => date('2023-10-22'),
            'type' => 'Adopción',
            'status_id' => 1
        ]);
        CaseAnimal::create([
            'user_id' => null,
            'date' => date('2023-10-22'),
            'pseudonym' => 'Tres patas',
            'case_animal_id' => null,
            'post_id' => 22,
            'status_id' => 1
        ]);
        Animal::create([
            'case_animal_id' => 22,
            'type_animal' => 'Gato',
            'gender' => 'Macho',
            'stage' => 'Cachorro',
        ]);
        Image::factory(1)->create([
            'imageable_id' => 22,
            'imageable_type' => 'App\Models\Post'
        ]);
        Post::factory(1)->create([
            'title' => 'Se busca a su familia',
            'description' => 'Este perrito de aprox 7 meses apareció en la anonima, esta gordito y bien cuidado por lo que tiene dueño.',
            'date_publish' => date('2023-05-14'),
            'type' => 'Encontrado',
            'status_id' => 1
        ]);
        CaseAnimal::create([
            'user_id' => null,
            'date' => date('2023-05-14'),
            'pseudonym' => 'Encontrado anonima',
            'case_animal_id' => null,
            'post_id' => 23,
            'status_id' => 1
        ]);
        Animal::create([
            'case_animal_id' => 23,
            'type_animal' => 'Perro',
            'gender' => 'Macho',
            'stage' => 'Cachorro',
        ]);
        Image::factory(1)->create([
            'imageable_id' => 23,
            'imageable_type' => 'App\Models\Post'
        ]);
        Post::factory(1)->create([
            'title' => 'Adopción de conejito',
            'description' => 'Conejito en adopción responsable, es dado en adopción por falta de posibilidad de cuidarlo correctamente. Se lo compro como macho pero se puede saber con seguridad a la edad de 6 meses con una consulta veterinaria.',
            'date_publish' => date('2023-03-30'),
            'type' => 'Adopción',
            'status_id' => 1
        ]);
        CaseAnimal::create([
            'user_id' => null,
            'date' => date('2023-03-30'),
            'pseudonym' => 'Conejito',
            'case_animal_id' => null,
            'post_id' => 24,
            'status_id' => 1
        ]);
        Animal::create([
            'case_animal_id' => 24,
            'type_animal' => 'Perro',
            'gender' => 'Hembra',
            'stage' => 'Cachorro',
        ]);
        Image::factory(1)->create([
            'imageable_id' => 24,
            'imageable_type' => 'App\Models\Post'
        ]);
        // ****************
        Post::factory(1)->create([
            'title' => 'Perdido!',
            'description' => 'Se perdio el Lunes por la mañana cuando salio a hacer sus necesidades, es una gata adulta muy asustadiza. No esta acostumbrada a estar en la calle.',
            'date_publish' => date('2021-11-05'),
            'type' => 'Perdido',
            'status_id' => 1
        ]);
        CaseAnimal::create([
            'user_id' => null,
            'date' => date('2021-11-05'),
            'pseudonym' => 'Gatita gris',
            'case_animal_id' => null,
            'post_id' => 25,
            'status_id' => 1
        ]);
        Animal::create([
            'case_animal_id' => 25,
            'type_animal' => 'Gato',
            'gender' => 'Hembra',
            'stage' => 'Joven',
        ]);
        Image::factory(1)->create([
            'imageable_id' => 25,
            'imageable_type' => 'App\Models\Post'
        ]);
        Post::factory(1)->create([
            'title' => 'Se busca a Susy',
            'description' => 'Susy se perdio la noche de el viernes, su dueña cree que salio por la ventana, es blanca con una mancha caracteristica en su pancita, tiene un collar rosa con cascabel. Nunca estuvo fuera de casa antes.',
            'date_publish' => date('2021-04-29'),
            'type' => 'Perdido',
            'status_id' => 1
        ]);
        CaseAnimal::create([
            'user_id' => null,
            'date' => date('2021-04-29'),
            'pseudonym' => 'Susy gata',
            'case_animal_id' => null,
            'post_id' => 26,
            'status_id' => 1
        ]);
        Animal::create([
            'case_animal_id' => 26,
            'type_animal' => 'Gato',
            'gender' => 'Hembra',
            'stage' => 'Joven',
        ]);
        Image::factory(1)->create([
            'imageable_id' => 26,
            'imageable_type' => 'App\Models\Post'
        ]);
        Post::factory(1)->create([
            'title' => 'Buscamos adoptante para gatita en recuperación',
            'description' => 'Esta pequeña fue rescatada hace un mes, la encontraron desnutrida y maltratada, actualmente se encuentra en recuperación con alimentación especial y controles veterinarios. Se necesita de un adoptante responsable que se comprometa a seguir con sus controles y cuidados.',
            'date_publish' => date('2022-08-12'),
            'type' => 'Perdido',
            'status_id' => 1
        ]);
        CaseAnimal::create([
            'user_id' => null,
            'date' => date('2022-08-12'),
            'pseudonym' => 'Gatita recuperación',
            'case_animal_id' => null,
            'post_id' => 27,
            'status_id' => 1
        ]);
        Animal::create([
            'case_animal_id' => 27,
            'type_animal' => 'Gato',
            'gender' => 'Hembra',
            'stage' => 'Cachorro',
        ]);
        Image::factory(1)->create([
            'imageable_id' => 27,
            'imageable_type' => 'App\Models\Post'
        ]);
        Post::factory(1)->create([
            'title' => 'Necesitamos adoptante para Fito',
            'description' => 'Fito es un callejero que vivio toda su vida siendo alimentado y cuidado por vecinos. Hace un mes fue atropellado y uno de los huesos de su pata trasera no soldo correctamente por lo que ya no puede persmanecer en la calle. Es muy docil y tranquilo con las personas pero no se lleva bien con otros perros. Necesita de un patio cerrado para evitar que se escape ya que esta acostumbrado a vivir en la calle.',
            'date_publish' => date('2023-12-01'),
            'type' => 'Adopción',
            'status_id' => 1
        ]);
        CaseAnimal::create([
            'user_id' => null,
            'date' => date('2023-12-01'),
            'pseudonym' => 'Fito patita mal',
            'case_animal_id' => null,
            'post_id' => 28,
            'status_id' => 1
        ]);
        Animal::create([
            'case_animal_id' => 28,
            'type_animal' => 'Perro',
            'gender' => 'Macho',
            'stage' => 'Adulto',
        ]);
        Image::factory(1)->create([
            'imageable_id' => 28,
            'imageable_type' => 'App\Models\Post'
        ]);
        Post::factory(1)->create([
            'title' => 'Una familia para Laica',
            'description' => 'Laica fue abandonado es una adulta reincidente que es devuelta o abandonada ya que tiene un comportamiento complicado con otros animales, es cariñosa con las personas con las que entra en confianza pero necesita ser la unica mascota de la casa para evitar confrontamientos violentos con otros animales, asi como tambien necesita un hogar con un patio grande y cerrado ya que es una perrita muy activa y necesita gastar energia. A pesar de los constantes abandonos nunca ha tenido problemas para adaptarse a nuevos adoptantes y mostrar un comportamiento cariñoso y amigable con ellos.',
            'date_publish' => date('2023-10-31'),
            'type' => 'Adopción',
            'status_id' => 1
        ]);
        CaseAnimal::create([
            'user_id' => null,
            'date' => date('2023-10-31'),
            'pseudonym' => 'Laica pansona',
            'case_animal_id' => null,
            'post_id' => 29,
            'status_id' => 1
        ]);
        Animal::create([
            'case_animal_id' => 29,
            'type_animal' => 'Perro',
            'gender' => 'Hembra',
            'stage' => 'Adulto',
        ]);
        Image::factory(1)->create([
            'imageable_id' => 29,
            'imageable_type' => 'App\Models\Post'
        ]);
        Post::factory(1)->create([
            'title' => 'Adopción para Michi',
            'description' => 'Michi es una cachorrita que fue abandonada en la ruta 22. Sufrio una fractura de cadera por lo que no camina bien y necesita de cuidados especiales para poder hacer sus necesidades. Es un caso de adopción super responsable que necesita de una gran corazón y compromiso.',
            'date_publish' => date('2021-12-03'),
            'type' => 'Adopción',
            'status_id' => 1
        ]);
        CaseAnimal::create([
            'user_id' => null,
            'date' => date('2021-12-03'),
            'pseudonym' => 'Michi especial',
            'case_animal_id' => null,
            'post_id' => 30,
            'status_id' => 1
        ]);
        Animal::create([
            'case_animal_id' => 30,
            'type_animal' => 'Gato',
            'gender' => 'Hembra',
            'stage' => 'Cachorro',
        ]);
        Image::factory(1)->create([
            'imageable_id' => 30,
            'imageable_type' => 'App\Models\Post'
        ]);
        Post::factory(1)->create([
            'title' => 'Se busca a su familia',
            'description' => 'Este gatito apareció en el patio de una vecina muy hambriento y sucio, es muy docil y cariñoso por lo que se cree que tiene dueño. Tiene una cicatriz en su patita delantera izquierda',
            'date_publish' => date('2023-10-27'),
            'type' => 'Encontrado',
            'status_id' => 1
        ]);
        CaseAnimal::create([
            'user_id' => null,
            'date' => date('2023-10-27'),
            'pseudonym' => 'Gatito aparecido',
            'case_animal_id' => null,
            'post_id' => 31,
            'status_id' => 1
        ]);
        Animal::create([
            'case_animal_id' => 31,
            'type_animal' => 'Gato',
            'gender' => 'Macho',
            'stage' => 'Joven',
        ]);
        Image::factory(1)->create([
            'imageable_id' => 31,
            'imageable_type' => 'App\Models\Post'
        ]);
        Post::factory(1)->create([
            'title' => 'Se busca un hogar',
            'description' => 'Camila es la ultima de su camada, es timida y asustadiza pero muy cariñosa cuando entra en confianza. Necesita de paciencia y preferentemente estar sola asta se se la haya adaptado correctamente a su nuevo hogar.',
            'date_publish' => date('2022-08-01'),
            'type' => 'Adopción',
            'status_id' => 1
        ]);
        CaseAnimal::create([
            'user_id' => null,
            'date' => date('2022-08-01'),
            'pseudonym' => 'Camila cami',
            'case_animal_id' => null,
            'post_id' => 32,
            'status_id' => 1
        ]);
        Animal::create([
            'case_animal_id' => 32,
            'type_animal' => 'Gato',
            'gender' => 'Hembra',
            'stage' => 'Joven',
        ]);
        Image::factory(1)->create([
            'imageable_id' => 32,
            'imageable_type' => 'App\Models\Post'
        ]);
        Post::factory(1)->create([
            'title' => 'Perdido gato terapeutico',
            'description' => 'Se perdio el Lunes por la mañana cuando salio a hacer sus necesidades, es un gato adulto, fue adoptado con fines terapeticos. No esta acostumbrada a estar en la calle.',
            'date_publish' => date('2023-11-05'),
            'type' => 'Perdido',
            'status_id' => 1
        ]);
        CaseAnimal::create([
            'user_id' => null,
            'date' => date('2023-11-05'),
            'pseudonym' => 'Gato terapeuta',
            'case_animal_id' => null,
            'post_id' => 33,
            'status_id' => 1
        ]);
        Animal::create([
            'case_animal_id' => 33,
            'type_animal' => 'Gato',
            'gender' => 'Macho',
            'stage' => 'Adulto',
        ]);
        Image::factory(1)->create([
            'imageable_id' => 33,
            'imageable_type' => 'App\Models\Post'
        ]);
        Post::factory(1)->create([
            'title' => 'Se busca a Misifu',
            'description' => 'Misifu se perdio el el sabado por la noche, quedo el porton abierto y su dueña no se dio cuenta, es un cachorro muy jugeton que nunca estuvo fuera de casa antes.',
            'date_publish' => date('2023-10-19'),
            'type' => 'Perdido',
            'status_id' => 1
        ]);
        CaseAnimal::create([
            'user_id' => null,
            'date' => date('2023-10-19'),
            'pseudonym' => 'Misifu',
            'case_animal_id' => null,
            'post_id' => 34,
            'status_id' => 1
        ]);
        Animal::create([
            'case_animal_id' => 34,
            'type_animal' => 'Gato',
            'gender' => 'Macho',
            'stage' => 'Adulto',
        ]);
        Image::factory(1)->create([
            'imageable_id' => 34,
            'imageable_type' => 'App\Models\Post'
        ]);
        Post::factory(1)->create([
            'title' => 'Ayuda para encontrar a Tafita',
            'description' => 'Tafita es un conejito adulto que rompio su jaulita y escapo, es blanco con manchas negras, con una cicatriz en la oreja derecha.',
            'date_publish' => date('2020-03-22'),
            'type' => 'Perdido',
            'status_id' => 1
        ]);
        CaseAnimal::create([
            'user_id' => null,
            'date' => date('2020-03-22'),
            'pseudonym' => 'Conejo Tafita',
            'case_animal_id' => null,
            'post_id' => 35,
            'status_id' => 1
        ]);
        Animal::create([
            'case_animal_id' => 35,
            'type_animal' => 'Conejo',
            'gender' => 'Hembra',
            'stage' => 'Cachorro',
        ]);
        Image::factory(1)->create([
            'imageable_id' => 35,
            'imageable_type' => 'App\Models\Post'
        ]);
        Post::factory(1)->create([
            'title' => 'Buscamos una familia para callejerito amoroso',
            'description' => 'Él es un callejero que lleva varios años viviendo en la calle. Es muy docil y tranquilo, necesita de un patio cerrado y comida especial.',
            'date_publish' => date('2020-06-20'),
            'type' => 'Adopción',
            'status_id' => 1
        ]);
        CaseAnimal::create([
            'user_id' => null,
            'date' => date('2020-06-20'),
            'pseudonym' => 'Callejero viejo',
            'case_animal_id' => null,
            'post_id' => 36,
            'status_id' => 1
        ]);
        Animal::create([
            'case_animal_id' => 36,
            'type_animal' => 'Perro',
            'gender' => 'Macho',
            'stage' => 'Adulto',
        ]);
        Image::factory(1)->create([
            'imageable_id' => 36,
            'imageable_type' => 'App\Models\Post'
        ]);
        Post::factory(1)->create([
            'title' => 'Gatita en adopción responsable',
            'description' => 'Ella fue abandonado por su familia, es muy jugueton y esta acostumbrado a convivivr con otras mascotas y con niños.',
            'date_publish' => date('2021-11-03'),
            'type' => 'Adopción',
            'status_id' => 1
        ]);
        CaseAnimal::create([
            'user_id' => null,
            'date' => date('2021-11-03'),
            'pseudonym' => 'Gatita mimo',
            'case_animal_id' => null,
            'post_id' => 37,
            'status_id' => 1
        ]);
        Animal::create([
            'case_animal_id' => 37,
            'type_animal' => 'Gato',
            'gender' => 'Hembra',
            'stage' => 'Joven',
        ]);
        Image::factory(1)->create([
            'imageable_id' => 37,
            'imageable_type' => 'App\Models\Post'
        ]);
        Post::factory(1)->create([
            'title' => 'Adopción para cachorrito juguetón',
            'description' => 'Pepita fue abandonado en la ruta 7. Sufrio desnutrición por lo que no camina bien y necesita de cuidados especiales para poder hacer sus necesidades. Es un caso de adopción super responsable que necesita de una gran corazón y compromiso.',
            'date_publish' => date('2020-12-03'),
            'type' => 'Adopción',
            'status_id' => 1
        ]);
        CaseAnimal::create([
            'user_id' => null,
            'date' => date('2020-12-03'),
            'pseudonym' => 'Pepita especial',
            'case_animal_id' => null,
            'post_id' => 38,
            'status_id' => 1
        ]);
        Animal::create([
            'case_animal_id' => 38,
            'type_animal' => 'Perro',
            'gender' => 'Macho',
            'stage' => 'Joven',
        ]);
        Image::factory(1)->create([
            'imageable_id' => 38,
            'imageable_type' => 'App\Models\Post'
        ]);
        Post::factory(1)->create([
            'title' => 'Ayuda para encontrar a la familia de este peludito',
            'description' => 'Este gatito apareció en el patio de una escuela muy hambriento y sucio, es muy docil y cariñoso, tiene un collar con el nombre Gago.',
            'date_publish' => date('2021-10-23'),
            'type' => 'Encontrado',
            'status_id' => 1
        ]);
        CaseAnimal::create([
            'user_id' => null,
            'date' => date('2021-10-23'),
            'pseudonym' => 'Gatito peludito',
            'case_animal_id' => null,
            'post_id' => 39,
            'status_id' => 1
        ]);
        Animal::create([
            'case_animal_id' => 39,
            'type_animal' => 'Gato',
            'gender' => 'Macho',
            'stage' => 'Cachorro',
        ]);
        Image::factory(1)->create([
            'imageable_id' => 39,
            'imageable_type' => 'App\Models\Post'
        ]);
        Post::factory(1)->create([
            'title' => 'Ichi busca un nuevo hogar',
            'description' => 'Ichi es un bebe abandonado, es timido y asustadizo pero muy cariñoso cuando entra en confianza. Necesita de paciencia hasta que se haya adaptado correctamente a su nuevo hogar.',
            'date_publish' => date('2023-11-23'),
            'type' => 'Adopción',
            'status_id' => 1
        ]);
        CaseAnimal::create([
            'user_id' => null,
            'date' => date('2023-11-23'),
            'pseudonym' => 'Ichi bebe',
            'case_animal_id' => null,
            'post_id' => 40,
            'status_id' => 1
        ]);
        Animal::create([
            'case_animal_id' => 40,
            'type_animal' => 'Gato',
            'gender' => 'Macho',
            'stage' => 'Cachorro',
        ]);
        Image::factory(1)->create([
            'imageable_id' => 40,
            'imageable_type' => 'App\Models\Post'
        ]);

        Post::factory(1)->create([
            'title' => 'Conejito escapista',
            'description' => 'Este Lunes por la mañana aparecio en la plaza central un conejito, es muy asustadizo y esta bien cuidado. Se escapo varias veces desde que lo encontraron por lo que es urgente dar con su familia',
            'date_publish' => date('2022-11-25'),
            'type' => 'Encontrado',
            'status_id' => 1
        ]);
        CaseAnimal::create([
            'user_id' => null,
            'date' => date('2022-11-25'),
            'pseudonym' => 'Conejo escapista',
            'case_animal_id' => null,
            'post_id' => 41,
            'status_id' => 1
        ]);
        Animal::create([
            'case_animal_id' => 41,
            'type_animal' => 'Conejo',
            'gender' => 'Macho',
            'stage' => 'Joven',
        ]);
        Image::factory(1)->create([
            'imageable_id' => 41,
            'imageable_type' => 'App\Models\Post'
        ]);
        Post::factory(1)->create([
            'title' => 'Buscamos una familia amorosa para viejito',
            'description' => 'Papa Noel es un viejito abandonado en una plaza es muy cariñoso y amable con otros animales. Es un perro saludable y activo, esta acostumbrado a convivir con otros perros y gatos, asi que es ideal para una familia con mas animales.',
            'date_publish' => date('2023-02-19'),
            'type' => 'Perdido',
            'status_id' => 1
        ]);
        CaseAnimal::create([
            'user_id' => null,
            'date' => date('2023-02-19'),
            'pseudonym' => 'Papa noel',
            'case_animal_id' => null,
            'post_id' => 42,
            'status_id' => 1
        ]);
        Animal::create([
            'case_animal_id' => 42,
            'type_animal' => 'Perro',
            'gender' => 'Macho',
            'stage' => 'Adulto',
        ]);
        Image::factory(1)->create([
            'imageable_id' => 42,
            'imageable_type' => 'App\Models\Post'
        ]);
        Post::factory(1)->create([
            'title' => 'Buscamos a Cholita',
            'description' => 'Cholita es la gata de una famiia amorosa que tuvo un descuido con el mosquitero de una ventana, es blanca con manchas negras, con una cicatriz en la oreja derecha.',
            'date_publish' => date('2022-05-25'),
            'type' => 'Perdido',
            'status_id' => 1
        ]);
        CaseAnimal::create([
            'user_id' => null,
            'date' => date('2022-05-25'),
            'pseudonym' => 'Cholita',
            'case_animal_id' => null,
            'post_id' => 43,
            'status_id' => 1
        ]);
        Animal::create([
            'case_animal_id' => 43,
            'type_animal' => 'Gato',
            'gender' => 'Macho',
            'stage' => 'Joven',
        ]);
        Image::factory(1)->create([
            'imageable_id' => 43,
            'imageable_type' => 'App\Models\Post'
        ]);
        Post::factory(1)->create([
            'title' => 'Otra oportunidad',
            'description' => 'Él es un callejero que lleva varios años viviendo en la calle. Es muy docil y tranquilo, sufre diabetes por lo que necesita de un patio cerrado y comida especial.',
            'date_publish' => date('2021-03-17'),
            'type' => 'Adopción',
            'status_id' => 1
        ]);
        CaseAnimal::create([
            'user_id' => null,
            'date' => date('2021-03-17'),
            'pseudonym' => 'Viejo Sarmiento',
            'case_animal_id' => null,
            'post_id' => 44,
            'status_id' => 1
        ]);
        Animal::create([
            'case_animal_id' => 44,
            'type_animal' => 'Perro',
            'gender' => 'Macho',
            'stage' => 'Adulto',
        ]);
        Image::factory(1)->create([
            'imageable_id' => 44,
            'imageable_type' => 'App\Models\Post'
        ]);
        Post::factory(1)->create([
            'title' => 'Gatita especial busca una familia',
            'description' => 'Ella es una gatita que enfermo de moquillo y fue abandonada en la veterinaria, debido a la enfermedad quedo con angunas secuelas motrices y con una dieta especial que necesita para desarrollarse correctamente. Busca una familia amorosa y compromotida para corresponder con mucho amor y compañia.',
            'date_publish' => date('2021-12-03'),
            'type' => 'Adopción',
            'status_id' => 1
        ]);
        CaseAnimal::create([
            'user_id' => null,
            'date' => date('2021-12-03'),
            'pseudonym' => 'Gatita moquillo',
            'case_animal_id' => null,
            'post_id' => 45,
            'status_id' => 1
        ]);
        Animal::create([
            'case_animal_id' => 45,
            'type_animal' => 'Gato',
            'gender' => 'Hembra',
            'stage' => 'Joven',
        ]);
        Image::factory(1)->create([
            'imageable_id' => 45,
            'imageable_type' => 'App\Models\Post'
        ]);
        Post::create([
            'title' => 'Adopción comprometida con seguimiento',
            'description' => 'Este gatito fue rescatado de ser atacado por un grupo de perros. Perdio su patita derecha delantera pero no tiene ningun problema que requiera de atención especial, mas alla de vigilania ya que no cuenta con la misma movilidad que otros gatitos. Es muy amoroso y activo, y no se lleva bien con los perros.',
            'date_publish' => date('2023-10-22'),
            'type' => 'Adopción',
            'locality_id' => 1,
            'status_id' => 1
        ]);
        CaseAnimal::create([
            'user_id' => null,
            'date' => date('2023-10-22'),
            'pseudonym' => 'Renguito',
            'case_animal_id' => null,
            'post_id' => 46,
            'status_id' => 1
        ]);
        Animal::create([
            'case_animal_id' => 46,
            'type_animal' => 'Gato',
            'gender' => 'Macho',
            'stage' => 'Joven',
        ]);
        Image::factory(1)->create([
            'imageable_id' => 46,
            'imageable_type' => 'App\Models\Post'
        ]);
        Post::factory(1)->create([
            'title' => 'Se busca a su familia',
            'description' => 'Este perrito de aprox 7 meses apareció en la anonima, esta gordito y bien cuidado por lo que tiene dueño.',
            'date_publish' => date('2021-05-14'),
            'type' => 'Encontrado',
            'status_id' => 1
        ]);
        CaseAnimal::create([
            'user_id' => null,
            'date' => date('2021-05-14'),
            'pseudonym' => 'Encontrado anonima',
            'case_animal_id' => null,
            'post_id' => 47,
            'status_id' => 1
        ]);
        Animal::create([
            'case_animal_id' => 47,
            'type_animal' => 'Perro',
            'gender' => 'Macho',
            'stage' => 'Cachorro',
        ]);
        Image::factory(1)->create([
            'imageable_id' => 47,
            'imageable_type' => 'App\Models\Post'
        ]);
        Post::factory(1)->create([
            'title' => 'Adopción diferente',
            'description' => 'Conejito en adopción responsable, es dado en adopción por falta de posibilidad de cuidarlo correctamente. Se lo compro como macho pero se puede saber con seguridad a la edad de 6 meses con una consulta veterinaria.',
            'date_publish' => date('2022-03-30'),
            'type' => 'Adopción',
            'status_id' => 1
        ]);
        CaseAnimal::create([
            'user_id' => null,
            'date' => date('2022-03-30'),
            'pseudonym' => 'Conejo rescatado',
            'case_animal_id' => null,
            'post_id' => 48,
            'status_id' => 1
        ]);
        Animal::create([
            'case_animal_id' => 48,
            'type_animal' => 'Conejo',
            'gender' => 'Hembra',
            'stage' => 'Cachorro',
        ]);
        Image::factory(1)->create([
            'imageable_id' => 48,
            'imageable_type' => 'App\Models\Post'
        ]);

        Post::factory(1)->create([
            'title' => 'Se busca a su familia',
            'description' => 'Este perrito de aprox 7 meses apareció en la anonima, esta gordito y bien cuidado por lo que tiene dueño.',
            'date_publish' => date('2023-05-14'),
            'type' => 'Encontrado',
            'status_id' => 1
        ]);
        CaseAnimal::create([
            'user_id' => null,
            'date' => date('2023-05-14'),
            'pseudonym' => 'Encontrado super sol',
            'case_animal_id' => null,
            'post_id' => 49,
            'status_id' => 1
        ]);
        Animal::create([
            'case_animal_id' => 49,
            'type_animal' => 'Perro',
            'gender' => 'Macho',
            'stage' => 'Cachorro',
        ]);
        Image::factory(1)->create([
            'imageable_id' => 49,
            'imageable_type' => 'App\Models\Post'
        ]);
        Post::factory(1)->create([
            'title' => 'Se busca a Neko',
            'description' => 'Neko se perdio la noche de el viernes, su dueña cree que salio por la ventana, es blanca con una mancha caracteristica en su pancita, tiene un collar rosa con cascabel. Nunca estuvo fuera de casa antes.',
            'date_publish' => date('2023-10-29'),
            'type' => 'Perdido',
            'status_id' => 1
        ]);
        CaseAnimal::create([
            'user_id' => null,
            'date' => date('2022-10-29'),
            'pseudonym' => 'Neko gata',
            'case_animal_id' => null,
            'post_id' => 50,
            'status_id' => 1
        ]);
        Animal::create([
            'case_animal_id' => 50,
            'type_animal' => 'Gato',
            'gender' => 'Hembra',
            'stage' => 'Joven',
        ]);
        Image::factory(1)->create([
            'imageable_id' => 50,
            'imageable_type' => 'App\Models\Post'
        ]);
        Post::factory(1)->create([
            'title' => 'Se busca hogar para Chiquita',
            'description' => 'Chiquita es una gatita que se encontro junto a sus hermanitos en un edificio abandonado. Es muy mimosa unque algo asustadisa',
            'date_publish' => date('2023-11-15'),
            'type' => 'Adopción',
            'status_id' => 1
        ]);
        CaseAnimal::create([
            'user_id' => null,
            'date' => date('2023-11-15'),
            'pseudonym' => 'Chiquita gata',
            'case_animal_id' => null,
            'post_id' => 51,
            'status_id' => 1
        ]);
        Animal::create([
            'case_animal_id' => 51,
            'type_animal' => 'Gato',
            'gender' => 'Hembra',
            'stage' => 'Cachorro',
        ]);
        Image::factory(1)->create([
            'imageable_id' => 51,
            'imageable_type' => 'App\Models\Post'
        ]);
        Post::factory(1)->create([
            'title' => 'Adopción responsable',
            'description' => 'Sato es un gato joven que fue abandonado por su familia al no llevarselo luego de una mudansa, no esta acostumbrado a convivir con otras mascotas y es algo uraño con las personas.',
            'date_publish' => date('2023-11-15'),
            'type' => 'Adopción',
            'status_id' => 1
        ]);
        CaseAnimal::create([
            'user_id' => null,
            'date' => date('2023-11-15'),
            'pseudonym' => 'Uraño Sato',
            'case_animal_id' => null,
            'post_id' => 52,
            'status_id' => 1
        ]);
        Animal::create([
            'case_animal_id' => 52,
            'type_animal' => 'Gato',
            'gender' => 'Macho',
            'stage' => 'Joven',
        ]);
        Image::factory(1)->create([
            'imageable_id' => 52,
            'imageable_type' => 'App\Models\Post'
        ]);
        Post::factory(1)->create([
            'title' => 'Se busca adoptante para Yiyo',
            'description' => 'Yiyo es un perro joven que fue abandonado por su familia al no llevarselo luego de una mudansa, no esta acostumbrado a convivir con otras mascotas y es algo uraño con las personas.',
            'date_publish' => date('2023-11-01'),
            'type' => 'Adopción',
            'status_id' => 1
        ]);
        CaseAnimal::create([
            'user_id' => null,
            'date' => date('2023-11-01'),
            'pseudonym' => 'Yiyo',
            'case_animal_id' => null,
            'post_id' => 53,
            'status_id' => 1
        ]);
        Animal::create([
            'case_animal_id' => 53,
            'type_animal' => 'Perro',
            'gender' => 'Macho',
            'stage' => 'Joven',
        ]);
        Image::factory(1)->create([
            'imageable_id' => 53,
            'imageable_type' => 'App\Models\Post'
        ]);
        Post::factory(1)->create([
            'title' => 'Adoptante para Gurú',
            'description' => 'Gurú es un gato joven abandonado por su familia por no querer pagar tratamientos veterinarios, sufre de infeccion urinaria cronica por lo que requiere cuidados y alimentación especial.',
            'date_publish' => date('2023-12-01'),
            'type' => 'Adopción',
            'status_id' => 1
        ]);
        CaseAnimal::create([
            'user_id' => null,
            'date' => date('2023-12-01'),
            'pseudonym' => 'Gurú',
            'case_animal_id' => null,
            'post_id' => 54,
            'status_id' => 1
        ]);
        Animal::create([
            'case_animal_id' => 54,
            'type_animal' => 'Gato',
            'gender' => 'Macho',
            'stage' => 'Joven',
        ]);
        Image::factory(1)->create([
            'imageable_id' => 54,
            'imageable_type' => 'App\Models\Post'
        ]);
        Post::factory(1)->create([
            'title' => 'Se busca una familia especial para Popoki',
            'description' => 'Popoki es una gatita que fue encontrada golpeada en la calle, tenia signos de pertenecer a alguien pero nunca fue reclamada, debido al abandono se volvio una gatita muy desconfiada y asustadiza por lo que necesita de paciencia y cuidados especiales.',
            'date_publish' => date('2023-12-03'),
            'type' => 'Adopción',
            'status_id' => 1
        ]);
        CaseAnimal::create([
            'user_id' => null,
            'date' => date('2023-12-03'),
            'pseudonym' => 'Popoki',
            'case_animal_id' => null,
            'post_id' => 55,
            'status_id' => 1
        ]);
        Animal::create([
            'case_animal_id' => 55,
            'type_animal' => 'Gato',
            'gender' => 'Hembra',
            'stage' => 'Joven',
        ]);
        Image::factory(1)->create([
            'imageable_id' => 55,
            'imageable_type' => 'App\Models\Post'
        ]);

    }
}
