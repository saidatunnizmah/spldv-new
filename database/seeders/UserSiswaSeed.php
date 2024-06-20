<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Nilai;
use App\Models\Siswa;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSiswaSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $guru = User::create([
            "name" => "Guru",
            "email" => "guru@gmail.com",
            "password" => Hash::make("guru1234"),
            "role" => "guru"
        ]);

        // $newUser1 = User::create([
        //     "name" => "Saidatun Nizmah",
        //     "email" => "saidatun.nizmah@gmail.com",
        //     "password" => Hash::make("nizmah1234"),
        //     "role" => "siswa"
        // ]);
        // Siswa::create([
        //     "user_id" => $newUser1->id,
        //     "kelas" => "A",
        //     "nisn" => "12345"
        // ]);

        // $newUser2 = User::create([
        //     "name" => "Muhammad Yulian",
        //     "email" => "muhammad.yulian10@gmail.com",
        //     "password" => Hash::make("yulian1234"),
        //     "role" => "siswa"
        // ]);
        // Siswa::create([
        //     "user_id" => $newUser2->id,
        //     "kelas" => "A",
        //     "nisn" => "12345"
        // ]);

        // foreach (range('a', 'd') as $letter) {
        //     for ($i = 0; $i < 5; $i++) {
        //         $newUser = User::create([
        //             "name" => "user" . $i,
        //             "email" => "user" . $i . $letter . "@gmail.com",
        //             "password" => Hash::make("user1234"),
        //             "role" => "siswa"
        //         ]);
        //         $newSiswa = Siswa::create([
        //             "user_id" => $newUser->id,
        //             "kelas" => strtoupper($letter),
        //             "nisn" => random_int(1000, 5000)
        //         ]);
        //         for ($j = 1; $j <= 3; $j++) {
        //             Nilai::create([
        //                 'siswa_id' => $newSiswa->id,
        //                 'jenis_kuis' => $j,
        //                 'nilai' => random_int(55, 100),
        //                 'percobaan' => 1,
        //                 'waktu_pengerjaan' => gmdate('H:i:s', random_int(1000, 1500))
        //             ]);
        //         }
        //     }
        // }
    }
}
