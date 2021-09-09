<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Curso;
use App\Models\User;
use App\Models\CursoUser;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoleSeeder::class);
        User::factory(10)->create();
        Curso::factory(100)->create();
        CursoUser::factory(300)->create();
        // $this->call(CursoSeeder::class); 
    }
}
