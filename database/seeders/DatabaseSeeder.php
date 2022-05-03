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

        DB::table('metodopago')->insert([ 'nombre' => "paypal", ]);
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

        DB::table('venta')->insert([ 
            'idUsuario'=>"1", 
            'idProducto'=>"9",
            'precioUnitario'=>"16",
            'cantidad'=>"5",
            'igv'=>"0.18",
            'costoEnvio'=>"16",
            'estadoVenta'=>"0",
            'idMetodoPago'=>"1",
            'fechaPago'=>"2022-05-01",
            'fechaEnvio'=>"2022-05-05",
        ]);
        DB::table('venta')->insert([ 
            'idUsuario'=>"1", 
            'idProducto'=>"2",
            'precioUnitario'=>"15",
            'cantidad'=>"6",
            'igv'=>"0.18",
            'costoEnvio'=>"48",
            'estadoVenta'=>"1",
            'idMetodoPago'=>"1",
            'fechaPago'=>"2022-05-03",
            'fechaEnvio'=>"2022-05-06",
        ]);
        DB::table('historial')->insert([
            'idVenta' => "1",
        ]);
        DB::table('historial')->insert([
            'idVenta' => "2",
        ]);
       /* DB::table('rol')->insert([
            'nombre'=>"usuario",
            'created_at'=>date('y-m-d h:m:s')
        ]);*/
        
    }
}
