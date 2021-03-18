<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('images')->insert([
            'title' => 'alcazaba',
            'description' => 'Imagen de la Alcazaba',
            'route' => 'assets/images/12657998993920.jpg',
            'order' => '1',
        ]);
        DB::table('images')->insert([
            'title' => 'avenidaSantaIsabelFin',
            'description' => 'Avenida Santa Isabel',
            'route' => 'assets/images/8600658671136.png',
            'order' => '1',
        ]);
        DB::table('images')->insert([
            'title' => 'avenidaSantaIsabelInicio',
            'description' => 'Avenida Santa Isabel',
            'route' => 'assets/images/1319079873633.png',
            'order' => '1',
        ]);
        DB::table('images')->insert([
            'title' => 'ayuntamientoAlmeria',
            'description' => 'Ayuntamiento de Almeria',
            'route' => 'assets/images/613525538580.jpg',
            'order' => '1',
        ]);
        DB::table('images')->insert([
            'title' => 'barrioAlto',
            'description' => 'Barrio Alto',
            'route' => 'assets/images/2134423083020.png',
            'order' => '1',
        ]);
        DB::table('images')->insert([
            'title' => 'barrioCaridad',
            'description' => 'Barrio de la Caridad',
            'route' => 'assets/images/6393582146160.png',
            'order' => '1',
        ]);
        DB::table('images')->insert([
            'title' => 'cableIngles',
            'description' => 'Cable Ingles',
            'route' => 'assets/images/6030310683555.jpg',
            'order' => '1',
        ]);
        DB::table('images')->insert([
            'title' => 'calleReinaRegenteFin',
            'description' => 'Calle Reina Regente',
            'route' => 'assets/images/4439987895750.png',
            'order' => '1',
        ]);
        DB::table('images')->insert([
            'title' => 'calleReinaRegenteInicio',
            'description' => 'Calle Reina Regente',
            'route' => 'assets/images/13381316479328.png',
            'order' => '1',
        ]);
        DB::table('images')->insert([
            'title' => 'caminoCruzCaravacaFin',
            'description' => 'Camino Cruz Caravaca',
            'route' => 'assets/images/3146740716942.png',
            'order' => '1',
        ]);
        DB::table('images')->insert([
            'title' => 'caminoCruzCaravacaInicio',
            'description' => 'Camino Cruz Caravaca',
            'route' => 'assets/images/16040466782260.png',
            'order' => '1',
        ]);
        DB::table('images')->insert([
            'title' => 'cañillo',
            'description' => 'Cañillo',
            'route' => 'assets/images/4036353040000.jpg',
            'order' => '1',
        ]);
        DB::table('images')->insert([
            'title' => 'casaMariposas',
            'description' => 'Casa de las Mariposas',
            'route' => 'assets/images/11418035649280.jpg',
            'order' => '1',
        ]);
        DB::table('images')->insert([
            'title' => 'catedral',
            'description' => 'Catedral de Almería',
            'route' => 'assets/images/3503554558070.jpg',
            'order' => '1',
        ]);
        DB::table('images')->insert([
            'title' => 'celiaViñasFachada',
            'description' => 'Puerta Principal del IES Celia Viñas',
            'route' => 'assets/images/5726778086869.jpg',
            'order' => '1',
        ]);
        DB::table('images')->insert([
            'title' => 'celiaViñasSalonActos',
            'description' => 'Vidriera del salon de actos del IES Celia Viñas',
            'route' => 'assets/images/12026719194009.jpg',
            'order' => '1',
        ]);
        DB::table('images')->insert([
            'title' => 'cerroSanCristobal',
            'description' => 'Cerro San Cristóbal',
            'route' => 'assets/images/11482620342816.jpg',
            'order' => '1',
        ]);
        DB::table('images')->insert([
            'title' => 'ciudadJardin',
            'description' => 'Barrio Ciudad Jardin',
            'route' => 'assets/images/1425640325515.png',
            'order' => '1',
        ]);
        DB::table('images')->insert([
            'title' => 'cuevaCampsa',
            'description' => 'Cueva Campsa',
            'route' => 'assets/images/9843861037556.png',
            'order' => '1',
        ]);
        DB::table('images')->insert([
            'title' => 'escuelaArtes',
            'description' => 'Escuela de Artes',
            'route' => 'assets/images/9286844261040.jpg',
            'order' => '1',
        ]);
        DB::table('images')->insert([
            'title' => 'estacionTren',
            'description' => 'Estación de tren de Almería',
            'route' => 'assets/images/8185726956420.bmp',
            'order' => '1',
        ]);
        DB::table('images')->insert([
            'title' => 'ermitaCerroSanCristobal',
            'description' => 'Ermita del Cerro San Cristobal',
            'route' => 'assets/images/7896724203023.jpg',
            'order' => '1',
        ]);
        DB::table('images')->insert([
            'title' => 'mercadoAbastos',
            'description' => 'Mercado de Abastos',
            'route' => 'assets/images/11749021297145.jpg',
            'order' => '1',
        ]);
        DB::table('images')->insert([
            'title' => 'molineta',
            'description' => 'Molineta',
            'route' => 'assets/images/13899591432325.png',
            'order' => '1',
        ]);
        DB::table('images')->insert([
            'title' => 'cerroMuralla',
            'description' => 'Muralla',
            'route' => 'assets/images/3074087861376.jpg',
            'order' => '1',
        ]);
        DB::table('images')->insert([
            'title' => 'museoDoñaPakyta',
            'description' => 'Museo de DÑA Pakyta',
            'route' => 'assets/images/10594624479322.jpg',
            'order' => '1',
        ]);
        DB::table('images')->insert([
            'title' => 'paseoAlmeriaFin',
            'description' => 'Paseo de Almería',
            'route' => 'assets/images/15257422287450.png',
            'order' => '1',
        ]);
        DB::table('images')->insert([
            'title' => 'paseoAlmeriaInicio',
            'description' => 'Paseo de Almería',
            'route' => 'assets/images/13082634401313.jpg',
            'order' => '1',
        ]);
        DB::table('images')->insert([
            'title' => 'pingurucho',
            'description' => 'Pingurucho',
            'route' => 'assets/images/904143568720.jpg',
            'order' => '1',
        ]);
        DB::table('images')->insert([
            'title' => 'plazaBurros',
            'description' => 'Plaza de los Burros',
            'route' => 'assets/images/2560663821352.jpg',
            'order' => '1',
        ]);
        DB::table('images')->insert([
            'title' => 'plazaCircular',
            'description' => 'Plaza Circular',
            'route' => 'assets/images/2363689741272.png',
            'order' => '1',
        ]);
        DB::table('images')->insert([
            'title' => 'plazaEducador',
            'description' => 'Plaza del Educador',
            'route' => 'assets/images/10546189663464.jpg',
            'order' => '1',
        ]);
        DB::table('images')->insert([
            'title' => 'plazaSanSebastian',
            'description' => 'Plaza San Sebastián',
            'route' => 'assets/images/1842192683289.jpg',
            'order' => '1',
        ]);
        DB::table('images')->insert([
            'title' => 'plazaToros',
            'description' => 'Plaza de Toros',
            'route' => 'assets/images/11132268820645.jpg',
            'order' => '1',
        ]);
        DB::table('images')->insert([
            'title' => 'plazaVieja',
            'description' => 'Plaza Vieja',
            'route' => 'assets/images/15769234341323.jpg',
            'order' => '1',
        ]);
        DB::table('images')->insert([
            'title' => 'refugios',
            'description' => 'Refugios Subterráneos',
            'route' => 'assets/images/10525201312371.jpg',
            'order' => '1',
        ]);
        DB::table('images')->insert([
            'title' => 'torrePerdigones',
            'description' => 'Torre de los Perdigones',
            'route' => 'assets/images/7312262244273.jpg',
            'order' => '1',
        ]);
        DB::table('images')->insert([
            'title' => 'torreVela',
            'description' => 'Torre de la Vela',
            'route' => 'assets/images/10534888899000.jpg',
            'order' => '1',
        ]);
        DB::table('images')->insert([
            'title' => 'solPortocarrero',
            'description' => 'Sol de Portocarrero para la caratula de la aplicación',
            'route' => 'assets/images/5340906345208.jpg',
            'order' => '1',
        ]);

    }
}
