<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rol1=New Role();
        $rol1->name='Administrador';
        $rol1->save();
        
        $rol2=New Role();
        $rol2->name='Profesor';
        $rol2->save();
 
        $rol3=New Role();
        $rol3->name='Alumno';
        $rol3->save();

    }
}
