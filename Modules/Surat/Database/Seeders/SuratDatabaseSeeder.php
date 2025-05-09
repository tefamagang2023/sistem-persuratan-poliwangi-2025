<?php

namespace Modules\Surat\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class SuratDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(MenuModulSuratTableSeeder::class);
        $this->call(UserModulSuratTableSeeder::class);
    }
}
