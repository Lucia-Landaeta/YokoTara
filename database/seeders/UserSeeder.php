<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admi = User::create([
            'name'=>'Lucia',
            'lastname'=>'Landaeta',
            'phone'=>151234567,
            'locality_id'=>'1',
            'email'=>'lucia@mail.com',
            'password'=> bcrypt('lucia_1234'),
        ]);
        $admi->assignRole('Admin');

        $admi = User::create([
            'name'=>'Anahi',
            'lastname'=>'Diaz',
            'phone'=>151358964,
            'locality_id'=>'5',
            'email'=>'anahi@mail.com',
            'password'=> bcrypt('anahi_1234'),
        ]);
        $admi->assignRole('Moder');

        $user=User::create([
            'name'=>'Santiago',
            'lastname'=>'Acosta',
            'phone'=>15653689,
            'locality_id'=>'5',
            'email'=>'santiagoa@mail.com',
            'password'=> bcrypt('santiagoa_1234'),
        ]);
        $user->assignRole('Moder');
        $user=User::create([
            'name'=>'Sofia Tatiana',
            'lastname'=>'Ramirez',
            'phone'=>152589647,
            'locality_id'=>'5',
            'email'=>'sofiatr@mail.com',
            'password'=> bcrypt('sofiatr_1234'),
        ]);
        $user->assignRole('Moder');
        $user=User::create([
            'name'=>'Andres Guillermo',
            'lastname'=>'Ojeda',
            'phone'=>15661235,
            'locality_id'=>'7',
            'email'=>'andresgo@mail.com',
            'password'=> bcrypt('andresgo_1234'),
        ]);
        $user->assignRole('Moder');
        $user=User::create([
            'name'=>'Catalina Romina',
            'lastname'=>'Luna',
            'phone'=>152203590,
            'locality_id'=>'3',
            'email'=>'catalinarl@mail.com',
            'password'=> bcrypt('catalinarl_1234'),
        ]);
        $user->assignRole('Moder');
        $user=User::create([
            'name'=>'Sofia Catalina',
            'lastname'=>'Olivera',
            'phone'=>1525009874,
            'locality_id'=>'8',
            'email'=>'Sofiaco@mail.com',
            'password'=> bcrypt('Sofiaco_1234'),
        ]);
        $user->assignRole('User');
        $user=User::create([
            'name'=>'Sofia Fabiana',
            'lastname'=>'Lagos',
            'phone'=>1511458965,
            'locality_id'=>'8',
            'email'=>'sofiafl@mail.com',
            'password'=> bcrypt('sofiafl_1234'),
        ]);
        $user->assignRole('User');
        $user=User::create([
            'name'=>'Micaela Andrea',
            'lastname'=>'Soto',
            'phone'=>1525633671,
            'locality_id'=>'1',
            'email'=>'micaelaas@mail.com',
            'password'=> bcrypt('micaelaas_1234'),
        ]);
        $user->assignRole('User');
        $user=User::create([
            'name'=>'Macarena Micaela',
            'lastname'=>'Villalba',
            'phone'=>150028036,
            'locality_id'=>'3',
            'email'=>'macarenamv@mail.com',
            'password'=> bcrypt('macarenamv_1234'),
        ]);
        $user->assignRole('User');
        $user=User::create([
            'name'=>'Paola',
            'lastname'=>'Suarez',
            'phone'=>151259968,
            'locality_id'=>'4',
            'email'=>'paolas@mail.com',
            'password'=> bcrypt('paolas_1234'),
        ]);
        $user->assignRole('User');
        $user=User::create([
            'name'=>'Marcela',
            'lastname'=>'Quiroga',
            'phone'=>152578966,
            'locality_id'=>'6',
            'email'=>'marcelaq@mail.com',
            'password'=> bcrypt('marcelaq_1234'),
        ]);
        $user->assignRole('User');
        $user=User::create([
            'name'=>'Sandra Juliana',
            'lastname'=>'Acosta',
            'phone'=>151125896,
            'locality_id'=>'5',
            'email'=>'sandraja@mail.com',
            'password'=> bcrypt('sandraja_1234'),
        ]);
        $user->assignRole('User');
        $user=User::create([
            'name'=>'Tamara',
            'lastname'=>'Vargas',
            'phone'=>15125778,
            'locality_id'=>'2',
            'email'=>'tamaravs@mail.com',
            'password'=> bcrypt('tamaravs_1234'),
        ]);
        $user->assignRole('User');
        $user=User::create([
            'name'=>'Liliana',
            'lastname'=>'Vargas',
            'phone'=>1554628996,
            'locality_id'=>'6',
            'email'=>'lilianav@mail.com',
            'password'=> bcrypt('lilianav_1234'),
        ]);
        $user->assignRole('User');
        $user=User::create([
            'name'=>'Yamila',
            'lastname'=>'Godoy',
            'phone'=>151154896,
            'locality_id'=>'4',
            'email'=>'yamilag@mail.com',
            'password'=> bcrypt('yamilag_1234'),
        ]);
        $user->assignRole('User');
        $user=User::create([
            'name'=>'Andrea Juliana',
            'lastname'=>'Lopez',
            'phone'=>150258963,
            'locality_id'=>'5',
            'email'=>'andreajl@mail.com',
            'password'=> bcrypt('andreajl_1234'),
        ]);
        $user->assignRole('User');
        $user=User::create([
            'name'=>'Julian Andres',
            'lastname'=>'Soto',
            'phone'=>151258966,
            'locality_id'=>'6',
            'email'=>'julianas@mail.com',
            'password'=> bcrypt('julianas_1234'),
        ]);
        $user->assignRole('User');
        $user=User::create([
            'name'=>'Luciano ',
            'lastname'=>'Peralta',
            'phone'=>15566895,
            'locality_id'=>'8',
            'email'=>'lucianop@mail.com',
            'password'=> bcrypt('lucianop_1234'),
        ]);
        $user->assignRole('User');
        $user=User::create([
            'name'=>'Fernando',
            'lastname'=>'Ramirez',
            'phone'=>151556984,
            'locality_id'=>'4',
            'email'=>'fernandor@mail.com',
            'password'=> bcrypt('fernandor_1234'),
        ]);
        $user->assignRole('User');
        $user=User::create([
            'name'=>'Pablo',
            'lastname'=>'Ruiz',
            'phone'=>15554102,
            'locality_id'=>'3',
            'email'=>'pablor@mail.com',
            'password'=> bcrypt('pablor_1234'),
        ]);
        $user->assignRole('User');
        $user=User::create([
            'name'=>'Gaspar Fernando',
            'lastname'=>'Vega',
            'phone'=>15002895,
            'locality_id'=>'1',
            'email'=>'gasparfv@mail.com',
            'password'=> bcrypt('gasparfv_1234'),
        ]);
        $user->assignRole('User');
        $user=User::create([
            'name'=>'Julian Antonio',
            'lastname'=>'Godoy',
            'phone'=>15323256,
            'locality_id'=>'1',
            'email'=>'julianag@mail.com',
            'password'=> bcrypt('julianag_1234'),
        ]);
        $user->assignRole('User');
        $user=User::create([
            'name'=>'Luis',
            'lastname'=>'Fernandez',
            'phone'=>15784512,
            'locality_id'=>'2',
            'email'=>'luisf@mail.com',
            'password'=> bcrypt('luisf_1234'),
        ]);
        $user->assignRole('User');
        $user=User::create([
            'name'=>'Andrea',
            'lastname'=>'Suarez',
            'phone'=>1525897456,
            'locality_id'=>'8',
            'email'=>'andreas@mail.com',
            'password'=> bcrypt('andreas_1234'),
        ]);
        $user->assignRole('User');
        $user=User::create([
            'name'=>'Victor Damian',
            'lastname'=>'Torres',
            'phone'=>152214895,
            'locality_id'=>'6',
            'email'=>'victord@mail.com',
            'password'=> bcrypt('victord_1234'),
        ]);
        $user->assignRole('User');
        $user=User::create([
            'name'=>'Jenifer Mia',
            'lastname'=>'Villalba',
            'phone'=>1577895632,
            'locality_id'=>'2',
            'email'=>'jenifermv@mail.com',
            'password'=> bcrypt('jenifermv_1234'),
        ]);
        $user->assignRole('User');
    }
}
