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

        // lib pengaturan provinsi
        $this->call(LibNegaraSeeder::class);
        $this->call(LibProvinsiSeeder::class);
        $this->call(LibKabupatenSeeder::class);
        $this->call(LibKecamatanSeeder::class);
        $this->call(LibDesaSeeder::class);
        // lib pustaka
        $this->call(LibAgamaSeeder::class);
        $this->call(LibHubunganSeeder::class);
        $this->call(LibPekerjaanSeeder::class);
        $this->call(LibPendidikanSeeder::class);
        $this->call(LibPptkisSeeder::class);
        $this->call(LibStatusKawinSeeder::class);
        $this->call(LibStatusTinggalSeeder::class);
        $this->call(LibPerangkatJabatan::class);
        // lib users
        $this->call(UsersTableSeeder::class);
        // lib parent surat
        $this->call(ParentSuratsSeeder::class);

        Model::reguard();
    }
}
