<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert([
          'name' => 'Pri Anton Subardio',
          'email' => 'prianthon@gedhe.or.id',
          'password' => bcrypt('gedhe1945'),
      ]);
    }
}
