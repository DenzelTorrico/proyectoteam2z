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
        DB::table('categories')->insert([ 'nombre'=>"Juegos", ]);

        //\App\Models\Productos::factory(20)->create();

    
       /* DB::table('rol')->insert([
            'nombre'=>"usuario",
            'created_at'=>date('y-m-d h:m:s')
        ]);*/
         DB::table("productos")->insert([
                'nombre' => "GTA SAN ANDREAS" ,
                'descripcion' => "Grand Theft Auto: San Andreas es un videojuego de acción-aventura de mundo abierto desarrollado por Rockstar North y publicado por Rockstar Games.",
                'precio' => 110,
                'descuento' => 10,
                'estadoProducto' => "NUEVO",
                'stock' => 5,
                'foto' => "https://i.blogs.es/c97ab3/trucos-san-andreas-1/450_1000.jpg",
                'idcategoria' => 3,
                'iduser' => 2,
            ]);

            DB::table("productos")->insert([
                'nombre' => "GTA VICE CITY" ,
                'descripcion' => "Grand Theft Auto: Vice City Stories es el décimo juego de la saga Grand Theft Auto. Es un videojuego diseñado para la consola PSP y lanzado en PlayStation 2 y PlayStation 3, creado por Rockstar North en colaboración con Rockstar Leeds y distribuido por Rockstar Games.",
                'precio' => 200,
                'descuento' => 10,
                'estadoProducto' => "NUEVO",
                'stock' => 4,
                'foto' => "https://static1-es.millenium.gg/articles/0/28/12/0/@/129519-gta-vi-article_m-1.jpg",
                'idcategoria' => 3,
                'iduser' => 2,
            ]);

            DB::table("productos")->insert([
                'nombre' => "GTA V" ,
                'descripcion' => "Grand Theft Auto V es un videojuego de acción-aventura de mundo abierto desarrollado por el estudio Rockstar North y distribuido por Rockstar Games. Fue lanzado el 17 de septiembre de 2013 para las consolas PlayStation 3 y Xbox 360.​",
                'precio' => 200,
                'descuento' => 10,
                'estadoProducto' => "NUEVO",
                'stock' => 5,
                'foto' => "https://www.somosxbox.com/wp-content/uploads/2020/03/GTA-5-screensaver-790x491.jpg",
                'idcategoria' => 3,
                'iduser' => 2,
            ]);

            DB::table("productos")->insert([
                'nombre' => "Doom Eternal" ,
                'descripcion' => "Doom Eternal es un videojuego de acción y disparos en primera persona desarrollado por id Software y publicado por Bethesda Softworks.​ Es el quinto título principal de la serie Doom y la secuela directa del juego estrenado en 2016.​",
                'precio' => 60,
                'descuento' => 10,
                'estadoProducto' => "NUEVO",
                'stock' => 5,
                'foto' => "https://i.blogs.es/0499bf/doometernal4/840_560.jpg",
                'idcategoria' => 3,
                'iduser' => 2,
            ]);

            DB::table("productos")->insert([
                'nombre' => "Dota 2" ,
                'descripcion' => "Dota 2 es un videojuego perteneciente al género de Arena de batalla en línea ARTS, también conocido como MOBA, lanzado el 9 de julio del año 2013. El juego fue desarrollado por la empresa Valve Corporation. ",
                'precio' => 50,
                'descuento' => 5,
                'estadoProducto' => "NUEVO",
                'stock' => 5,
                'foto' => "https://esports.as.com/2018/09/14/dota-2/Inteligencia-Artificial-Elon-Musk-Dota2_1172592742_199455_1440x810.jpg",
                'idcategoria' => 3,
                'iduser' => 2,
            ]);

            DB::table("productos")->insert([
                'nombre' => "GTA SAN ANDREAS" ,
                'descripcion' => "Grand Theft Auto: San Andreas es un videojuego de acción-aventura de mundo abierto desarrollado por Rockstar North y publicado por Rockstar Games.",
                'precio' => 110,
                'descuento' => 10,
                'estadoProducto' => "NUEVO",
                'stock' => 5,
                'foto' => "https://i.blogs.es/c97ab3/trucos-san-andreas-1/450_1000.jpg",
                'idcategoria' => 3,
                'iduser' => 2,
            ]);

            DB::table("productos")->insert([
                'nombre' => "Red Dead Redemption 2" ,
                'descripcion' => "Red Dead Redemption 2, estilizado Red Dead Redemption II, es un videojuego de acción-aventura western basado en el drama, en un mundo abierto y en perspectiva de primera y tercera persona, ​ con componentes para un jugador y multijugador.​ Fue desarrollado por Rockstar Games. ",
                'precio' => 110,
                'descuento' => 10,
                'estadoProducto' => "NUEVO",
                'stock' => 5,
                'foto' => "https://www.muycomputer.com/wp-content/uploads/2019/11/Red-Dead-Redemption-2-2-1.jpg",
                'idcategoria' => 3,
                'iduser' => 2,
            ]);

            DB::table("productos")->insert([
                'nombre' => "League of Legends" ,
                'descripcion' => "League of Legends es un videojuego del género multijugador de arena de batalla en línea y deporte electrónico el cual fue desarrollado por Riot Games para Microsoft Windows y OS X y para consolas digitales.",
                'precio' => 110,
                'descuento' => 30,
                'estadoProducto' => "NUEVO",
                'stock' => 5,
                'foto' => "https://images.contentstack.io/v3/assets/blt370612131b6e0756/blt02dd32b665c25036/5f4defe8b553152466d1b21a/Homepage_World_1.jpg",
                'idcategoria' => 3,
                'iduser' => 2,
            ]);

            DB::table("productos")->insert([
                'nombre' => "Sekiro: Shadows Die Twice" ,
                'descripcion' => "Sekiro: Shadows Die Twice es un videojuego de acción y aventura desarrollado por From Software y distribuido por Activision.​ El juego fue lanzado el 22 de marzo de 2019 en las plataformas PlayStation 4, Xbox One y Microsoft Windows.​",
                'precio' => 110,
                'descuento' => 10,
                'estadoProducto' => "NUEVO",
                'stock' => 5,
                'foto' => "https://i.ytimg.com/vi/OB5JOP7W6J0/maxresdefault.jpg",
                'idcategoria' => 3,
                'iduser' => 2,
            ]);

            DB::table("productos")->insert([
                'nombre' => "Max Payne 3" ,
                'descripcion' => "Max Payne 3 es un videojuego de acción en tercera persona de la franquicia Max Payne, desarrollado por Rockstar Games para Mac OS X, Microsoft Windows, PlayStation 3 y Xbox 360. Es el tercer juego de la saga, segundo desarrollado por Rockstar Vancouver.",
                'precio' => 180,
                'descuento' => 30,
                'estadoProducto' => "NUEVO",
                'stock' => 5,
                'foto' => "https://cdn-products.eneba.com/resized-products/067e0818bd36d71e109c0eb18b67c887_350x200_3x-0.jpg",
                'idcategoria' => 3,
                'iduser' => 2,
            ]);

            DB::table("productos")->insert([
                'nombre' => "Zapatillas Para Hombre Adidas Lite Racer 2.0 - EG3283" ,
                'descripcion' => "Deportivas y versátiles. 
                Ponte estas zapatillas de running para enfrentarte a las actividades de tu día a día. 
                El exterior de malla transpirable te ofrece comodidad de la mañana a la noche y la mediasuela suave amortigua cada uno de tus pasos. 
                Las 3 Tiras sin costuras irradian tu amor por adidas.
                Tallaje ofrecido USA",
                'precio' => 190,
                'descuento' => 20,
                'estadoProducto' => "NUEVO",
                'stock' => 5,
                'foto' => "https://i.linio.com/p/f34e2530d13e0de8a35ab92d17d3d381-product.webp",
                'idcategoria' => 1,
                'iduser' => 2,
            ]);

            DB::table("productos")->insert([
                'nombre' => "Polo Casbic Vitange Warehouse - Negro" ,
                'descripcion' => "polo de caballero
                polo estampado
                urbano
                cuello redondo",
                'precio' => 60,
                'descuento' => 5,
                'estadoProducto' => "NUEVO",
                'stock' => 5,
                'foto' => "https://i.linio.com/p/2a79a85e036514a318bc2832139477e7-product.webp",
                'idcategoria' => 1,
                'iduser' => 2,
            ]);

            DB::table("productos")->insert([
                'nombre' => "Mochila Antirrobo con Clave Laptop Celular Carga Usb Audifonos Gris" ,
                'descripcion' => "Medidas del producto 440X 290 X160mm 
                Colores: Negro con negro. 
                Puerto para Auriculares.
                Conector externo USB para carga de smartphone u otros. 
                 Con bolsillos para Laptop de hasta 15 pulgadas Sistema de Clave de Seguridad para la liberación de hebillas",
                'precio' => 79,
                'descuento' => 10,
                'estadoProducto' => "NUEVO",
                'stock' => 5,
                'foto' => "https://i.linio.com/p/780e0346f6b66081aa751bed37846715-product.webp",
                'idcategoria' => 1,
                'iduser' => 2,
            ]);

            DB::table("productos")->insert([
                'nombre' => "Bermuda Hombre Plomo - Gino Exclusive
                " ,
                'descripcion' => "Bermuda para hombre de algodón jersey, con bolsillo trasero y lateral",
                'precio' => 40,
                'descuento' => 5,
                'estadoProducto' => "NUEVO",
                'stock' => 5,
                'foto' => "https://gamarraclick.com/5466-thickbox_default/bermuda-hombre-plomo-gino-exclusive.jpg",
                'idcategoria' => 1,
                'iduser' => 2,
            ]);

            DB::table("productos")->insert([
                'nombre' => "Zapatillas Running Hombre adidas Ultimashow" ,
                'descripcion' => "Concéntrate y abstráete del ruido exterior.
                Cuando el ritmo aumenta, todo en lo que puedes pensar es en tus movimientos y en tu respiración.
                Lo estás consiguiendo.
                El resto no importa.
                Acelera, ralentiza y no pares de moverte con esta zapatilla de running adidas.
                Su diseño ligero y cómodo está listo para la acción.",
                'precio' => 199,
                'descuento' => 5,
                'estadoProducto' => "NUEVO",
                'stock' => 5,
                'foto' => "https://falabella.scene7.com/is/image/FalabellaPE/17323197_1?wid=1500&hei=1500&qlt=70",
                'idcategoria' => 1,
                'iduser' => 2,
            ]);

            DB::table("productos")->insert([
                'nombre' => "iPhone 11 128GB Negro" ,
                'descripcion' => "Cámara posterior: 12MP
                Cámara frontal: 12MP
                Tamaño de la pantalla: 6.1 pulgadas
                Memoria interna: 128GB
                Núcleos del procesador: No aplica",
                'precio' => 2990,
                'descuento' => 30,
                'estadoProducto' => "SEMINUEVO",
                'stock' => 2,
                'foto' => "https://falabella.scene7.com/is/image/FalabellaPE/18673445_1?wid=1500&hei=1500&qlt=70",
                'idcategoria' => 2,
                'iduser' => 2,
            ]);

            DB::table("productos")->insert([
                'nombre' => "X515JA Core i5 10a Gen 15.6 256GB SSD 8GB RAM" ,
                'descripcion' => "Características destacadas
                Procesador: Intel Core i5-10th Gen
                Modelo tarjeta de video: Intel UHD Graphics
                Tamaño de la pantalla: 15.6
                Disco duro sólido: 256 GB SSD
                Núcleos del procesador: Quad-Core",
                'precio' => 3299,
                'descuento' => 30,
                'estadoProducto' => "NUEVO",
                'stock' => 8,
                'foto' => "https://falabella.scene7.com/is/image/FalabellaPE/882539400_1?wid=1500&hei=1500&qlt=70",
                'idcategoria' => 2,
                'iduser' => 2,
            ]);

            DB::table("productos")->insert([
                'nombre' => "Apple Watch Series 6 GPS, 44mm Space Gray Aluminium Case with Black Sport Band" ,
                'descripcion' => "Pantalla Retina OLED LTPO siempre activa",
                'precio' => 2559,
                'descuento' => 20,
                'estadoProducto' => "SEMINUEVO",
                'stock' => 3,
                'foto' => "https://falabella.scene7.com/is/image/FalabellaPE/17697461_1?wid=1500&hei=1500&qlt=70",
                'idcategoria' => 2,
                'iduser' => 2,
            ]);

            DB::table("productos")->insert([
                'nombre' => "iPad Mini Wi-Fi 64GB 6ta Gen. Space Gray" ,
                'descripcion' => "iPad mini, Cable de carga USB-C (1 m), Adaptador de corriente USB-C de 20 W",
                'precio' => 2889,
                'descuento' => 25,
                'estadoProducto' => "NUEVO",
                'stock' => 8,
                'foto' => "https://falabella.scene7.com/is/image/FalabellaPE/18523363_1?wid=1500&hei=1500&qlt=70",
                'idcategoria' => 2,
                'iduser' => 2,
            ]);

            DB::table("productos")->insert([
                'nombre' => "LED Xiaomi 55 Android TV055XIA07 4K Ultra Hd Smart TV" ,
                'descripcion' => "Experimenta 4K UHD en todo su esplendor a través de imágenes realistas con mas detalle y mayor profundidad",
                'precio' => 1749,
                'descuento' => 10,
                'estadoProducto' => "NUEVO",
                'stock' => 3,
                'foto' => "https://falabella.scene7.com/is/image/FalabellaPE/18659963_1?wid=1500&hei=1500&qlt=70",
                'idcategoria' => 2,
                'iduser' => 2,
            ]);

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
        
    }
}
