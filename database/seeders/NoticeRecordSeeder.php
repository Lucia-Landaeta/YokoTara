<?php

namespace Database\Seeders;

use App\Models\CaseAnimal;
use App\Models\Notice;
use App\Models\Post;
use App\Models\RecordCase;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NoticeRecordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        //    Carga de Notices - Record
        Notice::factory(1)->create([
            'description' => 'Me gustaria comunicarme por el conejito perdido, encontre uno muy similar y lo tengo a resguardo.',
            'user_id' => 15,
            'post_id' => 11,
            'notice_status_id' => 2
        ]);
        RecordCase::create([
            'date' => date('2020-03-25'),
            'situation' => 'Encontrado',
            'observation' => 'Se realizo una entrevista y se confirmo que si se trata de Kiku.',
            'user_id' => 15,
            'case_animal_id' => 11,
        ]);
        RecordCase::create([
            'date' => date('2020-03-26'),
            'situation' => 'Recuperado',
            'observation' => 'Se llevo a Kiku con su dueña quien pudo corroborar mediante fotos que era él.',
            'user_id' => 10,
            'case_animal_id' => 11,
        ]);
        CaseAnimal::where('id', 11)->update(['status_id' => 3,'user_id'=>2]);
        Post::where('id', 11)->update(['status_id' => 3]);

        RecordCase::create([
            'date' => date('2020-04-15'),
            'situation' => 'Perdido',
            'observation' => 'La dueña de Tafita informó que no pudo recuperarla.',
            'user_id' => 9,
            'case_animal_id' => 35,
        ]);
        CaseAnimal::where('id', 35)->update(['status_id' => 3,'user_id'=>1]);
        Post::where('id', 35)->update(['status_id' => 3]);

        Notice::factory(1)->create([
            'description' => 'Me interesa adoptar al perrito',
            'user_id' => 20,
            'post_id' => 36,
            'notice_status_id' => 3
        ]);
        RecordCase::create([
            'date' => date('2020-06-22'),
            'situation' => 'Interés rechazado',
            'observation' => 'Después de una entrevista, se considero que el interesado no puede cumplir con las condiciones para el correcto cuidado de este perrrito.',
            'user_id' => 20,
            'case_animal_id' => 36,
        ]);
        RecordCase::create([
            'date' => date('2020-06-22'),
            'situation' => 'Interés rechazado',
            'observation' => 'Después de una entrevista, no se considero al interesado apropiado para adoptar por no contar con patio cerrado.',
            'user_id' => 16,
            'case_animal_id' => 36,
        ]);
        RecordCase::create([
            'date' => date('2020-06-22'),
            'situation' => 'Cerrado',
            'observation' => 'Por complicaciones de salud Gandalf falleció. ',
            'user_id' => 1,
            'case_animal_id' => 36,
        ]);
        CaseAnimal::where('id', 36)->update(['status_id' => 3,'user_id'=>1]);
        Post::where('id', 36)->update(['status_id' => 3]);
        RecordCase::create([
            'date' => date('2020-06-30'),
            'situation' => 'Adoptado',
            'observation' => 'A traves de una entrevista, se confirmo que el interesado cumple con las condiciones para la adopción de este viejito. Y se comprometio a los seguimientos.',
            'user_id' => 17,
            'case_animal_id' => 12,
        ]);
        RecordCase::create([
            'date' => date('2020-07-28'),
            'situation' => 'Control',
            'observation' => 'Se realizo un seguimiento al mes de adopción y se pudo comprobar que el ahora bautizado Gino es feliz y se encuentra bien cuidado.',
            'user_id' => 17,
            'case_animal_id' => 12,
        ]);
        CaseAnimal::where('id', 12)->update(['status_id' => 3,'user_id'=>3]);
        Post::where('id', 12)->update(['status_id' => 3]); 

        Notice::factory(1)->create([
            'description' => 'Me interesa adoptar',
            'user_id' => 13,
            'post_id' => 16,
            'notice_status_id' => 2
        ]);
        RecordCase::create([
            'date' => date('2020-09-05'),
            'situation' => 'Adoptado',
            'observation' => 'A traves de una entrevista, se confirmo que el interesado cumple con las condiciones para la adopción de este viejito. Y se comprometio a los seguimientos.',
            'user_id' => 13,
            'case_animal_id' => 16,
        ]);
        RecordCase::create([
            'date' => date('2020-07-28'),
            'situation' => 'Control',
            'observation' => 'Se realizo un seguimiento al mes de adopción y se pudo comprobar que el ahora bautizado Gino es feliz y se encuentra bien cuidado.',
            'user_id' => 18,
            'case_animal_id' => 16,
        ]);
        CaseAnimal::where('id', 16)->update(['status_id' => 3,'user_id'=>4]);
        Post::where('id', 16)->update(['status_id' => 3]); 

        RecordCase::create([
            'date' => date('2020-10-30'),
            'situation' => 'Cerrado',
            'observation' => 'El dueño de Firu informó que no pudo recuperarlo.',
            'user_id' => 23,
            'case_animal_id' => 10,
        ]);
        CaseAnimal::where('id', 10)->update(['status_id' => 3,'user_id'=>3]);
        Post::where('id', 10)->update(['status_id' => 3]);

        Notice::factory(1)->create([
            'description' => 'Soy la dueña de Gago y quiero recuperarlo.',
            'user_id' => 15,
            'post_id' => 15,
            'notice_status_id' => 2
        ]);
        RecordCase::create([
            'date' => date('2020-10-23'),
            'situation' => 'Recuperado',
            'observation' => 'Se pudo corroborar que la interesada es efectivamente la dueña de Gago y se reunieron.',
            'user_id' => 15,
            'case_animal_id' => 15,
        ]);
        CaseAnimal::where('id', 15)->update(['status_id' => 3,'user_id'=>5]);
        Post::where('id', 15)->update(['status_id' => 3]);

        Notice::factory(1)->create([
            'description' => 'Estoy interesado en adoptar a Havana.',
            'user_id' => 15,
            'post_id' => 20,
            'notice_status_id' => 2
        ]);
        RecordCase::create([
            'date' => date('2020-11-06'),
            'situation' => 'Interés Aceptado',
            'observation' => 'A traves de una entrevista, se confirmo que el interesado cumple con las condiciones para la adopción. Y se comprometio a los seguimientos.',
            'user_id' => 20,
            'case_animal_id' => 13,
        ]);
        RecordCase::create([
            'date' => date('2020-12-8'),
            'situation' => 'Control',
            'observation' => 'Se realizo un seguimiento al mes de adopción y se pudo comprobar que se encuentra bien cuidado.',
            'user_id' => 20,
            'case_animal_id' => 13,
        ]);
        RecordCase::create([
            'date' => date('2020-12-8'),
            'situation' => 'Castración',
            'observation' => 'Se realizo un seguimiento de castración y el adoptante cumplio con la misma en tiempo y forma, actualmente Havana se encuentra en recuperación.',
            'user_id' => 20,
            'case_animal_id' => 13,
        ]);
        RecordCase::create([
            'date' => date('2020-12-8'),
            'situation' => 'Cerrado',
            'observation' => 'Se concreto la adopción de Havana',
            'user_id' => 20,
            'case_animal_id' => 13,
        ]);
        CaseAnimal::where('id', 13)->update(['status_id' => 3,'user_id'=>2]);
        Post::where('id', 13)->update(['status_id' => 3]);

        Notice::factory(1)->create([
            'description' => 'Encontre una gatita muy similar.',
            'user_id' => 16,
            'post_id' => 9,
            'notice_status_id' => 3
        ]);
        RecordCase::create([
            'date' => date('2020-11-05'),
            'situation' => 'Interés rechazado',
            'observation' => 'Se pudo puso en contacto con la interesada y se corroboro que no se trataba de Ichima.',
            'user_id' => 16,
            'case_animal_id' => 9,
        ]);
        RecordCase::create([
            'date' => date('2020-11-09'),
            'situation' => 'Recuperado',
            'observation' => 'La dueña de Ichima se contactó e informo que la gatita volvio a casa sola.',
            'user_id' => 13,
            'case_animal_id' => 9,
        ]);
        CaseAnimal::where('id', 9)->update(['status_id' => 3,'user_id'=>5]);
        Post::where('id', 9)->update(['status_id' => 3]);

        Notice::factory(1)->create([
            'description' => 'Estoy interesado en adoptar a Jujuy.',
            'user_id' => 26,
            'post_id' => 14,
            'notice_status_id' => 2
        ]);
        RecordCase::create([
            'date' => date('2020-11-06'),
            'situation' => 'Interés Aceptado',
            'observation' => 'A traves de una entrevista, se confirmo que el interesado cumple con las condiciones para la adopción. Y se comprometio a los seguimientos.',
            'user_id' => 26,
            'case_animal_id' => 14,
        ]);
        RecordCase::create([
            'date' => date('2020-12-8'),
            'situation' => 'Control',
            'observation' => 'Se realizo un seguimiento al mes de adopción y se pudo comprobar que se encuentra bien cuidado.',
            'user_id' => 26,
            'case_animal_id' => 14,
        ]);
        RecordCase::create([
            'date' => date('2020-1-22'),
            'situation' => 'Castración',
            'observation' => 'Se realizo un seguimiento de castración y el adoptante cumplio con la misma en tiempo y forma, actualmente Jujuy se encuentra en recuperación.',
            'user_id' => 26,
            'case_animal_id' => 14,
        ]);
        RecordCase::create([
            'date' => date('2020-3-16'),
            'situation' => 'Cerrado',
            'observation' => 'Se concreto la adopción de Jujuy',
            'user_id' => 26,
            'case_animal_id' => 14,
        ]);
        CaseAnimal::where('id', 14)->update(['status_id' => 3,'user_id'=>1]);
        Post::where('id', 14)->update(['status_id' => 3]);

        Notice::factory(1)->create([
            'description' => 'Quiero adoptar a Pepita.',
            'user_id' => 24,
            'post_id' => 38,
            'notice_status_id' => 3
        ]);
        RecordCase::create([
            'date' => date('2020-12-04'),
            'situation' => 'Interés rechazado',
            'observation' => 'A traves de una entrevista, se confirmo que el interesado no cumple con las condiciones para la adopción.',
            'user_id' => 24,
            'case_animal_id' => 38,
        ]);
        Notice::factory(1)->create([
            'description' => 'me interesa adoptar a Pepita.',
            'user_id' => 9,
            'post_id' => 38,
            'notice_status_id' => 2
        ]);
        RecordCase::create([
            'date' => date('2020-12-20'),
            'situation' => 'Interés Aceptado',
            'observation' => 'A traves de una entrevista, se confirmo que el interesado cumple con las condiciones para la adopción. Y se comprometio a los seguimientos.',
            'user_id' => 9,
            'case_animal_id' => 38,
        ]);
        RecordCase::create([
            'date' => date('2020-1-22'),
            'situation' => 'Control',
            'observation' => 'Se realizo un seguimiento al mes de adopción y se pudo comprobar que se encuentra bien cuidado.',
            'user_id' => 9,
            'case_animal_id' => 38,
        ]);
        RecordCase::create([
            'date' => date('2020-5-05'),
            'situation' => 'Castración',
            'observation' => 'Se realizo un seguimiento de castración y el adoptante cumplio con la misma en tiempo y forma, actualmente pepita se encuentra en recuperación.',
            'user_id' => 9,
            'case_animal_id' => 38,
        ]);
        RecordCase::create([
            'date' => date('2020-7-8'),
            'situation' => 'Cerrado',
            'observation' => 'Se concreto la adopción de Pepita',
            'user_id' => 9,
            'case_animal_id' => 38,
        ]);
        CaseAnimal::where('id', 38)->update(['status_id' => 3,'user_id'=>6]);
        Post::where('id', 38)->update(['status_id' => 3]);

        Notice::factory(1)->create([
            'description' => 'Me interesa adoptar al perrito adulto.',
            'user_id' => 22,
            'post_id' => 44,
            'notice_status_id' => 2
        ]);
        RecordCase::create([
            'date' => date('2021-03-22'),
            'situation' => 'Interés Aceptado',
            'observation' => 'A traves de una entrevista, se confirmo que el interesado cumple con las condiciones para la adopción. Y se comprometio a los seguimientos.',
            'user_id' => 22,
            'case_animal_id' => 44,
        ]);
        RecordCase::create([
            'date' => date('2021-04-19'),
            'situation' => 'Control',
            'observation' => 'Se realizo un seguimiento al mes de adopción y se pudo comprobar que se encuentra bien cuidado.',
            'user_id' => 22,
            'case_animal_id' => 44,
        ]);
        RecordCase::create([
            'date' => date('2021-07-11'),
            'situation' => 'Cerrado',
            'observation' => 'Se concreto la adopción',
            'user_id' => 22,
            'case_animal_id' => 44,
        ]);
        CaseAnimal::where('id', 44)->update(['status_id' => 3,'user_id'=>2]);
        Post::where('id', 44)->update(['status_id' => 3]);

        Notice::factory(1)->create([
            'description' => 'Llego a mi casa una gatita que se parece mucho.',
            'user_id' => 23,
            'post_id' => 26,
            'notice_status_id' => 2
        ]);
        RecordCase::create([
            'date' => date('2021-04-30'),
            'situation' => 'Interés aceptado',
            'observation' => 'Se pudo puso en contacto con la interesada y mediante fotos se corroboro que se trataba de Susy.',
            'user_id' => 16,
            'case_animal_id' => 26,
        ]);
        RecordCase::create([
            'date' => date('2021-04-30'),
            'situation' => 'Recuperado',
            'observation' => 'La dueña de Susy corroboro que si se trataba de Susy.',
            'user_id' => 16,
            'case_animal_id' =>26,
        ]);
        CaseAnimal::where('id',26)->update(['status_id' => 3,'user_id'=>3]);
        Post::where('id',26)->update(['status_id' => 3]);

        Notice::factory(1)->create([
            'description' => 'Se me perdio mi perrrito y creo que puede ser este.',
            'user_id' => 12,
            'post_id' => 47,
            'notice_status_id' => 2
        ]);
        RecordCase::create([
            'date' => date('2021-04-30'),
            'situation' => 'Interés aceptado',
            'observation' => 'Se pudo puso en contacto con la interesada y mediante fotos se corroboro que se trataba de su cachorro Teo.',
            'user_id' => 12,
            'case_animal_id' => 47,
        ]);
        RecordCase::create([
            'date' => date('2021-04-30'),
            'situation' => 'Recuperado',
            'observation' => 'La dueña de Teo ya lo recupero y llevo a su casa.',
            'user_id' => 12,
            'case_animal_id' =>47,
        ]);
        CaseAnimal::where('id',47)->update(['status_id' => 3,'user_id'=>1]);
        Post::where('id',47)->update(['status_id' => 3]);

        RecordCase::create([
            'date' => date('2021-11-15'),
            'situation' => 'Adoptado',
            'observation' => 'El responsable del transito informo que el gatito no fue reclamado y decidio adoptarlo él mismo.',
            'user_id' => 15,
            'case_animal_id' => 39,
        ]);
        RecordCase::create([
            'date' => date('2021-11-30'),
            'situation' => 'Control',
            'observation' => 'Se realizo un seguimiento al mes de adopción y se pudo comprobar que se encuentra bien cuidado.',
            'user_id' => 15,
            'case_animal_id' => 39,
        ]);
        RecordCase::create([
            'date' => date('2021-1-15'),
            'situation' => 'Cerrado',
            'observation' => 'Se concreto la adopción',
            'user_id' => 15,
            'case_animal_id' => 39,
        ]);
        CaseAnimal::where('id', 39)->update(['status_id' => 3,'user_id'=>2]);
        Post::where('id', 39)->update(['status_id' => 3]); 


        Notice::factory(1)->create([
            'description' => 'Quiero adoptar a la gatita.',
            'user_id' => 11,
            'post_id' => 37,
            'notice_status_id' => 2
        ]);
        RecordCase::create([
            'date' => date('2021-11-07'),
            'situation' => 'Interés Aceptado',
            'observation' => 'A traves de una entrevista, se confirmo que el interesado cumple con las condiciones para la adopción. Y se comprometio a los seguimientos.',
            'user_id' => 11,
            'case_animal_id' => 37,
        ]);
        RecordCase::create([
            'date' => date('2021-12-09'),
            'situation' => 'Control',
            'observation' => 'Se realizo un seguimiento al mes de adopción y se pudo comprobar que se encuentra bien cuidado.',
            'user_id' => 11,
            'case_animal_id' => 37,
        ]);
        RecordCase::create([
            'date' => date('2021-12-22'),
            'situation' => 'Control',
            'observation' => 'Se realizo un seguimiento por enfermedad, corroborando correcto tratamiento veterinario y recuperación.',
            'user_id' => 11,
            'case_animal_id' => 37,
        ]);
        RecordCase::create([
            'date' => date('2021-06-03'),
            'situation' => 'Cerrado',
            'observation' => 'Se concreto la adopción',
            'user_id' => 11,
            'case_animal_id' => 37,
        ]);
        CaseAnimal::where('id', 37)->update(['status_id' => 3,'user_id'=>5]);
        Post::where('id', 37)->update(['status_id' => 3]);

        RecordCase::create([
            'date' => date('2021-01-05'),
            'situation' => 'Cerrado',
            'observation' => 'El dueño informó que no pudo recuperarlo.',
            'user_id' => 24,
            'case_animal_id' => 25,
        ]);
        CaseAnimal::where('id', 25)->update(['status_id' => 3,'user_id'=>6]);
        Post::where('id', 25)->update(['status_id' => 3]);

        Notice::factory(1)->create([
            'description' => 'Quiero adoptar a la michi.',
            'user_id' => 15,
            'post_id' => 37,
            'notice_status_id' => 2
        ]);
        RecordCase::create([
            'date' => date('2021-12-15'),
            'situation' => 'Interés Aceptado',
            'observation' => 'A traves de una entrevista, se confirmo que el interesado cumple con las condiciones para la adopción. Y se comprometio a los seguimientos.',
            'user_id' => 15,
            'case_animal_id' => 30,
        ]);
        RecordCase::create([
            'date' => date('2021-12-09'),
            'situation' => 'Control',
            'observation' => 'Se realizo un seguimiento al mes de adopción y se pudo comprobar que se encuentra bien cuidado.',
            'user_id' => 15,
            'case_animal_id' => 30,
        ]);
        RecordCase::create([
            'date' => date('2021-12-22'),
            'situation' => 'Castración',
            'observation' => 'Se realizo un seguimiento por castración, corroborando correcto tratamiento veterinario y recuperación.',
            'user_id' => 15,
            'case_animal_id' => 30,
        ]);
        RecordCase::create([
            'date' => date('2021-06-03'),
            'situation' => 'Adoptado',
            'observation' => 'El adoptante cedió el cuidado de Michi a su hermana por razones personales.',
            'user_id' => 8,
            'case_animal_id' => 30,
        ]);
        RecordCase::create([
            'date' => date('2021-08-09'),
            'situation' => 'Control',
            'observation' => 'Se realizo un seguimiento al mes del cambio, Michi se adapta bien y se cumple con sus cuidados.',
            'user_id' => 8,
            'case_animal_id' => 30,
        ]);
        RecordCase::create([
            'date' => date('2021-10-03'),
            'situation' => 'Cerrado',
            'observation' => 'Se concreto la adopción',
            'user_id' => 8,
            'case_animal_id' => 30,
        ]);
        CaseAnimal::where('id', 30)->update(['status_id' => 3,'user_id'=>4]);
        Post::where('id', 30)->update(['status_id' => 3]);

        RecordCase::create([
            'date' => date('2021-12-28'),
            'situation' => 'Cerrado',
            'observation' => 'La gatita fallecio debido a complicaciones con sus secuelas.',
            'user_id' => 5,
            'case_animal_id' => 45,
        ]);
        CaseAnimal::where('id', 45)->update(['status_id' => 3,'user_id'=>5]);
        Post::where('id', 45)->update(['status_id' => 3]);

        Notice::factory(1)->create([
            'description' => 'Quiero adoptar al conejito.',
            'user_id' => 8,
            'post_id' => 24,
            'notice_status_id' => 3
        ]);
        RecordCase::create([
            'date' => date('2023-02-09'),
            'situation' => 'Interés rechazado',
            'observation' => 'A traves de una entrevista, se confirmo que el interesado no cumple con las condiciones para la adopción.',
            'user_id' => 8,
            'case_animal_id' => 24,
        ]);
        Notice::factory(1)->create([
            'description' => 'me interesa la adopción.',
            'user_id' => 11,
            'post_id' => 24,
            'notice_status_id' => 3
        ]);
        RecordCase::create([
            'date' => date('2023-02-15'),
            'situation' => 'Interés rechazado',
            'observation' => 'A traves de una entrevista y visita, se confirmo que el interesado no cumple con las condiciones de patio cerrado.',
            'user_id' => 11,
            'case_animal_id' => 24,
        ]);
        Notice::factory(1)->create([
            'description' => 'Quiero adoptar al conejito. Tengo experiencia con el cuidado de conejos',
            'user_id' => 17,
            'post_id' => 24,
            'notice_status_id' => 2
        ]);
        RecordCase::create([
            'date' => date('2023-02-15'),
            'situation' => 'Interés aceptado',
            'observation' => 'A traves de una entrevista y visita, se confirmo que el interesado cumple con las condiciones de adopción y cuenta con experiencia en cidado de conejos.',
            'user_id' => 11,
            'case_animal_id' => 24,
        ]);
        RecordCase::create([
            'date' => date('2021-12-09'),
            'situation' => 'Control',
            'observation' => 'Se realizo un seguimiento al mes de adopción y se pudo comprobar que se encuentra bien cuidado y se comprometio a la castración.',
            'user_id' => 11,
            'case_animal_id' => 24,
        ]);
        CaseAnimal::where('id', 24)->update(['status_id' => 2,'user_id'=>1]);
        Post::where('id', 24)->update(['status_id' => 2]);

        RecordCase::create([
            'date' => date('2023-05-19'),
            'situation' => 'Adoptado',
            'observation' => 'El responsable de tansito decidio adoptar al cachorrito.',
            'user_id' => 25,
            'case_animal_id' => 23,
        ]);
        RecordCase::create([
            'date' => date('2023-06-21'),
            'situation' => 'Control',
            'observation' => 'Se realizo un seguimiento al mes de adopción y se pudo comprobar que se encuentra bien cuidado y se comprometio a la castración.',
            'user_id' => 25,
            'case_animal_id' => 23,
        ]);
        CaseAnimal::where('id', 23)->update(['status_id' => 2,'user_id'=>6]);
        Post::where('id', 23)->update(['status_id' => 2]);

        Notice::factory(1)->create([
            'description' => 'Quiero adoptar a la perrita para mi hija',
            'user_id' => 16,
            'post_id' => 8,
            'notice_status_id' => 3
        ]);
        RecordCase::create([
            'date' => date('2023-02-15'),
            'situation' => 'Interés rechazado',
            'observation' => 'A traves de una entrevista y visita, concluyo que la interesada no se encontraba comprometida y conciente de las responsabilidades de cuidar un animalito.',
            'user_id' => 16,
            'case_animal_id' => 8,
        ]);
        CaseAnimal::where('id', 8)->update(['status_id' => 2]);
        Post::where('id', 8)->update(['status_id' => 2]);
        
        Notice::factory(1)->create([
            'description' => 'me interesa adoptar a Laica',
            'user_id' => 17,
            'post_id' => 29,
            'notice_status_id' => 2
        ]);
        RecordCase::create([
            'date' => date('2023-02-15'),
            'situation' => 'Interés aceptado',
            'observation' => 'A traves de una entrevista y visita, concluyo que la interesada se encontraba comprometida y conciente de las responsabilidades de cuidar un animalito.',
            'user_id' => 17,
            'case_animal_id' => 29,
        ]);
        CaseAnimal::where('id', 29)->update(['status_id' => 2]);
        Post::where('id', 29)->update(['status_id' => 2]);
        
        Notice::factory(1)->create([
            'description' => 'Quiero darle un hogar a Lolo',
            'user_id' => 13,
            'post_id' => 5,
            'notice_status_id' => 3
        ]);
        RecordCase::create([
            'date' => date('2023-02-15'),
            'situation' => 'Interés rechazado',
            'observation' => 'A traves de una entrevista y visita, concluyo que la interesada no cuenta con las condiciones y el conocimiento para adoptar un conejo.',
            'user_id' => 13,
            'case_animal_id' => 5,
        ]);
        Notice::factory(1)->create([
            'description' => 'Me gustaria adoptar al conejito.',
            'user_id' => 8,
            'post_id' => 5,
            'notice_status_id' => 3
        ]);
        RecordCase::create([
            'date' => date('2023-02-15'),
            'situation' => 'Interés rechazado',
            'observation' => 'Se realizo una visita al interesado, y se concluyo que no cuenta con las condiciones y el conocimiento para adoptar un conejo.',
            'user_id' => 8,
            'case_animal_id' => 5,
        ]);
        CaseAnimal::where('id', 5)->update(['status_id' => 2,'user_id'=>2]);
        Post::where('id', 5)->update(['status_id' => 2]);

        Notice::factory(1)->create([
            'description' => 'Ayer llego un gato muy parecido a mi casa.',
            'user_id' => 8,
            'post_id' => 33,
            'notice_status_id' => 3
        ]);
        RecordCase::create([
            'date' => date('2023-11-07'),
            'situation' => 'Interés rechazado',
            'observation' => 'Se realizo una visita y se comprobo que no se trata de Melo.',
            'user_id' => 8,
            'case_animal_id' => 33,
        ]);
        CaseAnimal::where('id', 33)->update(['status_id' => 2]);
        Post::where('id', 33)->update(['status_id' => 2]);

        Notice::factory(1)->create([
            'description' => 'Me gustaria adoptar a este gatito, tengo otro más que es muy cariñoso y paternal.',
            'user_id' => 18,
            'post_id' => 7,
            'notice_status_id' => 2
        ]);
        RecordCase::create([
            'date' => date('2023-10-30'),
            'situation' => 'Interés aceptado',
            'observation' => 'Se realizo una visita y estrevista, la interesada esta muy comprometida con la adopción y se comprometio a la castración.',
            'user_id' => 18,
            'case_animal_id' => 7,
        ]);
        RecordCase::create([
            'date' => date('2023-11-15'),
            'situation' => 'Control',
            'observation' => 'Se realizo un seguimiento al mes de adopción y se pudo comprobar que se encuentra bien cuidado y sigue comprometida a la castración.',
            'user_id' => 18,
            'case_animal_id' => 7,
        ]);
        CaseAnimal::where('id', 7)->update(['status_id' => 2,'user_id'=>6]);
        Post::where('id', 7)->update(['status_id' => 2]);

        Notice::factory(1)->create([
            'description' => 'Me gustaria adoptar a Papa Noel. No tengo otras mascotas y mi casa es espaciosa.',
            'user_id' => 10,
            'post_id' => 42,
            'notice_status_id' => 2
        ]);
        RecordCase::create([
            'date' => date('2023-10-30'),
            'situation' => 'Interés aceptado',
            'observation' => 'Se realizo una visita y estrevista, la interesada esta muy comprometida con la adopción y mostro gran interes en los cuidados necesarios para Papa Noel.',
            'user_id' => 10,
            'case_animal_id' => 42,
        ]);
        RecordCase::create([
            'date' => date('2023-11-15'),
            'situation' => 'Control',
            'observation' => 'Se realizo un seguimiento al mes de adopción y se pudo comprobar que se encuentra bien cuidado y que se adapto correctamente.',
            'user_id' => 10,
            'case_animal_id' => 42,
        ]);
        CaseAnimal::where('id', 42)->update(['status_id' => 2,'user_id'=>2]);
        Post::where('id', 42)->update(['status_id' => 2]);
        Notice::factory(1)->create([
            'description' => 'Me gustaria Conocer a Rengito para ver si puedo brindarle lo que necesita.',
            'user_id' => 23,
            'post_id' => 46,
            'notice_status_id' => 3
        ]);
        RecordCase::create([
            'date' => date('2023-10-24'),
            'situation' => 'Interés rechazado',
            'observation' => 'Se realizo una estrevista, el interesado no creyo ser capaz de brindar los cuidados que Renguito necesita. No cuenta con patio cerrado y sus vecinos tienen muchos perros.',
            'user_id' => 23,
            'case_animal_id' => 46,
        ]);
        Notice::factory(1)->create([
            'description' => 'Me gustaria adoptar a Rengito.',
            'user_id' => 21,
            'post_id' => 46,
            'notice_status_id' => 2
        ]);
        RecordCase::create([
            'date' => date('2023-10-30'),
            'situation' => 'Interés aceptado',
            'observation' => 'Despues de una entrevista y presentación con renguito, el interesado se comprometio a brindar los cuidados que Renguito necesita, seguir con sus controles veterinarios y realizar la castración a los 6 meses',
            'user_id' => 21,
            'case_animal_id' => 46,
        ]);
        RecordCase::create([
            'date' => date('2023-11-15'),
            'situation' => 'Control',
            'observation' => 'Se realizo un seguimiento a 1 semana de la adopción para comprobar como se adapta Renguito a su nuevo hogar. Esta algo timido pero con máSs confianza.',
            'user_id' => 21,
            'case_animal_id' => 46,
        ]);
        RecordCase::create([
            'date' => date('2023-11-15'),
            'situation' => 'Control',
            'observation' => 'Se realizo un seguimiento al mes de adopción y se pudo comprobar que se encuentra bien cuidado y que se adapto correctamente. Se estan cumpliendo con sus controles veterinarios.',
            'user_id' => 21,
            'case_animal_id' => 46,
        ]);
        RecordCase::create([
            'date' => date('2023-04-25'),
            'situation' => 'Castración',
            'observation' => 'Se cumplio con la castración de Renguito, actualmente se encuentra en recuperación.',
            'user_id' => 21,
            'case_animal_id' => 46,
        ]);
        RecordCase::create([
            'date' => date('2023-05-14'),
            'situation' => 'Control',
            'observation' => 'Renguito tuvo complicaciones por una infección despues de la castración esta recibiendo atención veterinaria.',
            'user_id' => 21,
            'case_animal_id' => 46,
        ]);
        RecordCase::create([
            'date' => date('2023-05-20'),
            'situation' => 'Control',
            'observation' => 'Renguito se recupero bien de su tratamiento. Se le haran un último control para concretar la adopción.',
            'user_id' => 21,
            'case_animal_id' => 46,
        ]);
        CaseAnimal::where('id', 46)->update(['status_id' => 2,'user_id'=>1]);
        Post::where('id', 46)->update(['status_id' => 2]);

        Notice::factory(1)->create([
            'description' => 'Quiero adoptar',
            'user_id' => 15,
            'post_id' => 6,
            'notice_status_id' => 1
        ]);
        Notice::factory(1)->create([
            'description' => 'Me interesa adoptar al cachorrito.',
            'user_id' => 23,
            'post_id' => 6,
            'notice_status_id' => 1
        ]);
        Notice::factory(1)->create([
            'description' => 'Me gustaria adoptar a Fito.',
            'user_id' => 23,
            'post_id' => 28,
            'notice_status_id' => 1
        ]);
        Notice::factory(1)->create([
            'description' => 'Mi sobrina encontro un catito muy parecido, puede ser Misifu.',
            'user_id' => 21,
            'post_id' => 34,
            'notice_status_id' => 1
        ]);
        Notice::factory(1)->create([
            'description' => 'Creo poder darle un hogar a Toto.',
            'user_id' => 16,
            'post_id' => 4,
            'notice_status_id' => 1
        ]);
    }
}
