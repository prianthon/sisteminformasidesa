<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // lib provinsi
        $this->call(LibNegaraSeeder::class);
        $this->call(LibProvinsiSeeder::class);
        $this->call(LibKabupatenSeeder::class);
        $this->call(LibKecamatanSeeder::class);
        $this->call(LibDesaSeeder::class);
        // lib users
        $this->call(UsersTableSeeder::class);
        // lib parent surat
        $this->call(ParentSuratsSeeder::class);

        Model::reguard();
    }
}
