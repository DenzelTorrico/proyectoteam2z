<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
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
         //\App\Models\User::factory(10)->create();
        /* DB::table('rol')->insert([
             'nombre'=>"usuario"
         ]);
         DB::table('rol')->insert([
            'nombre'=>"administrador"
        ]);*/

        DB::table('rol')->insert([
            'nombre'=>"administrador",
            'created_at'=>date('y-m-d h:m:s')
         
        ]);
        DB::table('rol')->insert([
            'nombre'=>"usuario",
            'created_at'=>date('y-m-d h:m:s')
         
        ]);
        
    }
}
