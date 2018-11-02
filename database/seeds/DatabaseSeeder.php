<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

         DB::table('users')->insert([
          'name' =>'Administrador',
          'email' =>'admin@correo.net',
          'password' => bcrypt('123'),
          'created_at' => now(),
          'updated_at' => now()

    ]);

         factory(\App\User::class, 29)->create(); 
    }
}
