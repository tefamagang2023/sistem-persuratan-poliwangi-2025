<?php

namespace Modules\Kepegawaian\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Modules\Kepegawaian\Entities\Pegawai;

class KepegawaianDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Data user dan role
        $users = [
            [
                "id"=> 1,
                "nip"=> "195602221988111001",
                "nama"=> "Direktur",
                "id_staff"=> 4,
                "id_jurusan"=> 4,
                "id_prodi"=> null,
                "jenis_kelamin"=> "L",
                "gelar_dpn"=> null,
                "gelar_blk"=> null,
                "username"=> "direktur"
            ],
            [
                "id"=> 2,
                "nip"=> "195602221988111002",
                "nama"=> "Wakil Direktur 1",
                "id_staff"=> 4,
                "id_jurusan"=> 4,
                "id_prodi"=> null,
                "jenis_kelamin"=> "L",
                "gelar_dpn"=> null,
                "gelar_blk"=> null,
                "username"=> "wadir1"
            ],
            [
                "id"=> 3,
                "nip"=> "195602221988111003",
                "nama"=> "Wakil Direktur 2",
                "id_staff"=> 4,
                "id_jurusan"=> 4,
                "id_prodi"=> null,
                "jenis_kelamin"=> "L",
                "gelar_dpn"=> null,
                "gelar_blk"=> null,
                "username"=> "wadir2"
            ],
            [
                "id"=> 4,
                "nip"=> "195602221988111004",
                "nama"=> "Wakil Direktur 3",
                "id_staff"=> 4,
                "id_jurusan"=> 4,
                "id_prodi"=> null,
                "jenis_kelamin"=> "L",
                "gelar_dpn"=> null,
                "gelar_blk"=> null,
                "username"=> "wadir3"
            ],
        ];

        // Menyimpan data ke tabel user
        DB::table('pegawais')->insert($users);
    }
}
