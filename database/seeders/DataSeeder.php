<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Visitor;
use App\Models\Meet;
use App\Models\Utility;
use App\Models\Day;
use App\Models\User;

class DataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('password')
        ]);

        Day::create([
            'name' => 'Senin'
        ]);

        Day::create([
            'name' => 'Selasa'
        ]);

        Day::create([
            'name' => 'Rabu'
        ]);

        Day::create([
            'name' => 'Kamis'
        ]);

        Day::create([
            'name' => 'Jumat'
        ]);

        Meet::create([
            'meet_with' => 'Kepala Sekolah',
        ]);
        Meet::create([
            'meet_with' => 'TU',
        ]);
        Meet::create([
            'meet_with' => 'BP',
        ]);
        Meet::create([
            'meet_with' => 'Staff Management',
        ]);
        Meet::create([
            'meet_with' => 'Staff TU',
        ]);
        Meet::create([
            'meet_with' => 'Guru',
        ]);
        Meet::create([
            'meet_with' => 'Guru Piket',
        ]);
        Meet::create([
            'meet_with' => 'lain-lain',
        ]);


        Utility::create([
            'utilities' => 'Kedinasan'
        ]);
        Utility::create([
            'utilities' => 'Kesiswaan'
        ]);
        Utility::create([
            'utilities' => 'BP'
        ]);
        Utility::create([
            'utilities' => 'TU'
        ]);
        Utility::create([
            'utilities' => 'lain-lain'
        ]);

        Visitor::create([
            'name' => 'Robben',
            'plat_nomor' => 'B 1223 AJ',
            // 'instance' => null,
            'phone_number' => null,
            // 'meet_id' => 1,
            // 'utility_id' => 4,
            'merk_motor' => 'Mio',
            'date' => '2023-03-09'
        ]);

      
    }
}
