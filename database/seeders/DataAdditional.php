<?php

namespace Database\Seeders;

use App\Models\Day;
use Illuminate\Database\Seeder;
use App\Models\Major;
use App\Models\Room;
use App\Models\Student;
use App\Models\Teacher;



class DataAdditional extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Major::create([
        //     'name' => 'Honda'
        // ]);
        // Major::create([
        //     'name' => 'Yamaha'
        // ]);
        // Major::create([
        //     'name' => 'Suzuki'
        // ]);
        // Major::create([
        //     'name' => 'Kawasaki'
        // ]);
        // Major::create([
        //     'name' => 'Viar'
        // ]);
        // Major::create([
        //     'name' => 'KTM'
        // ]);
        // Major::create([
        //     'name' => 'Lain Lain'
        // ]);

        Room::create([
            'name' => 'Teori 1'
        ]);
        Room::create([
            'name' => 'Teori 2'
        ]);
        Room::create([
            'name' => 'Teori 3'
        ]);
        Room::create([
            'name' => 'Teori 4'
        ]);
        Room::create([
            'name' => 'Teori 5'
        ]);
        Room::create([
            'name' => 'Teori 6'
        ]);
        Room::create([
            'name' => 'Teori 7'
        ]);
        Room::create([
            'name' => 'Teori 8'
        ]);
        Room::create([
            'name' => 'Teori 9'
        ]);
        Room::create([
            'name' => 'Teori 10'
        ]);
        Room::create([
            'name' => 'Teori 11'
        ]);
        Room::create([
            'name' => 'Teori 12'
        ]);
        Room::create([
            'name' => 'Teori 13'
        ]);
        Room::create([
            'name' => 'Teori 14'
        ]);
        Room::create([
            'name' => 'Teori 15'
        ]);
        Room::create([
            'name' => 'Teori 16'
        ]);
        Room::create([
            'name' => 'Teori 17'
        ]);
        Room::create([
            'name' => 'Teori 18'
        ]);

        Room::create([
            'name' => 'Ruang Guru'
        ]);
        Room::create([
            'name' => 'Aula'
        ]);
        Room::create([
            'name' => 'Musholla'
        ]);
        Room::create([
            'name' => 'Ruang BK'
        ]);
        Room::create([
            'name' => 'Ruang Kepala Sekolah'
        ]);
        Room::create([
            'name' => 'Ruang Wakil Kepala Sekolah'
        ]);
        Room::create([
            'name' => 'Ruang LSP'
        ]);
        Room::create([
            'name' => 'Ruang Humas'
        ]);
        Room::create([
            'name' => 'Ruang TU'
        ]);
        Room::create([
            'name' => 'Lab RPL'
        ]);
        Room::create([
            'name' => 'Lab AKL'
        ]);
        Room::create([
            'name' => 'Lab OTKP'
        ]);
        Room::create([
            'name' => 'Lab BDP'
        ]);


        Teacher::create([
            'name' => 'Bpk. Mujahid',
            'subject' => 'Pemrograman Dasar',
            'days_id' => 1,
            'room_id' => 1,
            'major_id' => 1,
            'hour_start' => '12.12',
            'hour_end' => '15.00'
        ]);

        Student::create([
            'name' => 'Nayara',
            'plat_nomor' => '12345',
        ]);
    }
}
