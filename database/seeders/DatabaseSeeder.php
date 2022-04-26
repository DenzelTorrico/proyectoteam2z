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
        /*   DB::table('rol')->insert([
            'nombre'=>"usuario"
        ]);
        DB::table('rol')->insert([
            'nombre'=>"administrador"
        ]);
        */
        
        DB::table('rol')->insert([ 'nombre'=>"Usuario", ]);
        DB::table('rol')->insert([ 'nombre'=>"Administrador", ]);
        
        //\App\Models\User::factory(3)->create();

        
        DB::table('users')->insert([
             'nombre'=>"admin",
             'apellidos'=>"admin",
             'telefono'=>"admin",
             'correo'=>"admin@hotmail.com",
             'usuario'=>"admin",
             'password'=>bcrypt("admin"),
             'direccion'=>"admin",
             'created_at'=>date('y-m-d h:m:s'),
             'id_role' => '1',
             'email_verified_at' => now(),
             'remember_token' => rand(1, 9999999999),
        ]);
        
        DB::table('users')->insert([
            'nombre'=>"user",
            'apellidos'=>"user",
            'telefono'=>"user",
            'correo'=>"user@hotmail.com",
            'usuario'=>"user",
            'password'=>bcrypt("user"),
            'direccion'=>"user",
            'created_at'=>date('y-m-d h:m:s'),
            'id_role' => '1',
            'email_verified_at' => now(),
            'remember_token' => rand(1, 9999999999),
       ]);
        
        DB::table('categories')->insert([ 'nombre'=>"Ropa", ]);
        DB::table('categories')->insert([ 'nombre'=>"Electrodomésticos", ]);

        \App\Models\Productos::factory(20)->create();


       /* DB::table('rol')->insert([
            'nombre'=>"usuario",
            'created_at'=>date('y-m-d h:m:s')
        ]);*/
        
    }
}
