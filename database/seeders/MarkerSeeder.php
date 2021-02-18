<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MarkerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('markers')->insert([
            'title' => 'La Casa de las Mariposas',
            'latitude' => '36.84170',
            'length' => '-2.46378',
            'name' => 'casaMariposas',
            'information' => 'xcsdvsdvsdvsdvsdvsdfvsdfv',
            'type' => '0',
            'start_point' => null,
            'radio' => null,
            'border_color' => null,
            'background_color' => null,
            'opacity' => null,
        ]);

        DB::table('markers')->insert([
            'title' => 'Cañillo',
            'latitude' => '36.84142',
            'length' => '-2.46400',
            'name' => 'cañillo',
            'information' => 'ghtrntn',
            'type' => '0',
            'start_point' => null,
            'radio' => null,
            'border_color' => null,
            'background_color' => null,
            'opacity' => null,
        ]);

        DB::table('markers')->insert([
            'title' => 'Mercado de Abastos',
            'latitude' => '36.84032',
            'length' => '-2.46264',
            'name' => 'mercadoAbastos',
            'information' => 'gh,gh',
            'type' => '0',
            'start_point' => null,
            'radio' => null,
            'border_color' => null,
            'background_color' => null,
            'opacity' => null,
        ]);

        DB::table('markers')->insert([
            'title' => 'Refugios',
            'latitude' => '36.84149608549136',
            'length' => '-2.4646839894335444',
            'name' => 'refugios',
            'information' => 'fjewifj',
            'type' => '0',
            'start_point' => null,
            'radio' => null,
            'border_color' => null,
            'background_color' => null,
            'opacity' => null,
        ]);

        DB::table('markers')->insert([
            'title' => 'Paseo de Almeria',
            'latitude' => '36.84159141131295',
            'length' => '-2.4639249336854663',
            'name' => 'paseoAlmeriaInicio',
            'information' => 'dvsdfvdf',
            'type' => '0',
            'start_point' => null,
            'radio' => null,
            'border_color' => null,
            'background_color' => null,
            'opacity' => null,
        ]);

        DB::table('markers')->insert([
            'title' => 'Paseo de Almeria',
            'latitude' => '36.83556979472669',
            'length' => '-2.4629481757629925',
            'name' => 'paseoAlmeriaFin',
            'information' => 'efdefewf',
            'type' => '0',
            'start_point' => null,
            'radio' => null,
            'border_color' => null,
            'background_color' => null,
            'opacity' => null,
        ]);

        DB::table('markers')->insert([
            'title' => 'Plaze del Educador',
            'latitude' => '36.83897171955203',
            'length' => '-2.4635565602280396',
            'name' => 'plkazaEducador',
            'information' => 'fbdfbhd',
            'type' => '0',
            'start_point' => null,
            'radio' => null,
            'border_color' => null,
            'background_color' => null,
            'opacity' => null,
        ]);

        DB::table('markers')->insert([
            'title' => 'Plaza de los Burros',
            'latitude' => '36.83755782105399',
            'length' => '-2.4639612128727033',
            'name' => 'plazaBurros',
            'information' => 'fvefbrvfd',
            'type' => '0',
            'start_point' => null,
            'radio' => null,
            'border_color' => null,
            'background_color' => null,
            'opacity' => null,
        ]);

        DB::table('markers')->insert([
            'title' => 'Escuela de Artes',
            'latitude' => '36.83711',
            'length' => '-2.46428',
            'name' => 'escuelaArtes',
            'information' => 'eferg',
            'type' => '0',
            'start_point' => null,
            'radio' => null,
            'border_color' => null,
            'background_color' => null,
            'opacity' => null,
        ]);

        DB::table('markers')->insert([
            'title' => 'IES Celia Viñas',
            'latitude' => '36.83801157287049',
            'length' => '-2.461368970896174',
            'name' => 'celiaViñas',
            'information' => 'rger',
            'type' => '0',
            'start_point' => null,
            'radio' => null,
            'border_color' => null,
            'background_color' => null,
            'opacity' => null,
        ]);

        DB::table('markers')->insert([
            'title' => 'Salon de Actos IES Celia Viñas',
            'latitude' => '36.837984250313205',
            'length' => '-2.461137584716642',
            'name' => 'celiaViñasSalonActos',
            'information' => 'dfhndnafnd',
            'type' => '0',
            'start_point' => null,
            'radio' => null,
            'border_color' => null,
            'background_color' => null,
            'opacity' => null,
        ]);

        DB::table('markers')->insert([
            'title' => 'Cable Ingles',
            'latitude' => '36.83200',
            'length' => '-2.46349',
            'name' => 'cableIngles',
            'information' => 'gsbgfbn',
            'type' => '0',
            'start_point' => null,
            'radio' => null,
            'border_color' => null,
            'background_color' => null,
            'opacity' => null,
        ]);

        DB::table('markers')->insert([
            'title' => 'Ciudad Jardin',
            'latitude' => '36.83202562331118',
            'length' => '-2.4536694109363073',
            'name' => 'ciudadJardin',
            'information' => 'fesgvrdsgvfrbre',
            'type' => '1',
            'start_point' => null,
            'radio' => '250',
            'border_color' => '#5CC1FF',
            'background_color' => '#FAF77F',
            'opacity' => '0.25',
        ]);

        DB::table('markers')->insert([
            'title' => 'Plaza de Toros',
            'latitude' => '36.84683',
            'length' => '-2.46167',
            'name' => 'plazaToros',
            'information' => 'egrgrfhg',
            'type' => '0',
            'start_point' => null,
            'radio' => null,
            'border_color' => null,
            'background_color' => null,
            'opacity' => null,
        ]);

        DB::table('markers')->insert([
            'title' => 'Catedral',
            'latitude' => '36.83817',
            'length' => '-2.46739',
            'name' => 'catedral',
            'information' => 'sdegvsadfgbdf',
            'type' => '0',
            'start_point' => null,
            'radio' => null,
            'border_color' => null,
            'background_color' => null,
            'opacity' => null,
        ]);

        DB::table('markers')->insert([
            'title' => 'Torre de la Vela',
            'latitude' => '36.84111981987807',
            'length' => '-2.471620183850794',
            'name' => 'torreVela',
            'information' => 'wegergerh',
            'type' => '0',
            'start_point' => null,
            'radio' => null,
            'border_color' => null,
            'background_color' => null,
            'opacity' => null,
        ]);

        DB::table('markers')->insert([
            'title' => 'Cerro San Cristobal',
            'latitude' => '36.84243221553866',
            'length' => '-2.4686099340586845',
            'name' => 'cerroSanCristobal',
            'information' => 'dfhdfhbdf',
            'type' => '1',
            'start_point' => null,
            'radio' => '35',
            'border_color' => '#5CC1FF',
            'background_color' => '#FAF77F',
            'opacity' => '0.25',
        ]);

        DB::table('markers')->insert([
            'title' => 'Ermita Sagrado Corazon de Jesus',
            'latitude' => '36.84250102543934',
            'length' => '-2.468613775143747',
            'name' => 'ermitaCerroSanCristobal',
            'information' => 'fgbadfbdf',
            'type' => '0',
            'start_point' => null,
            'radio' => null,
            'border_color' => null,
            'background_color' => null,
            'opacity' => null,
        ]);

        DB::table('markers')->insert([
            'title' => 'Murallas de Jayrán',
            'latitude' => '36.84216649887228',
            'length' => '-2.47045566212104',
            'name' => 'cerroMuralla',
            'information' => 'sfgdfagbadfg',
            'type' => '0',
            'start_point' => null,
            'radio' => null,
            'border_color' => null,
            'background_color' => null,
            'opacity' => null,
        ]);

        DB::table('markers')->insert([
            'title' => 'Plaza Circular',
            'latitude' => '36.83521602003171',
            'length' => '-2.462788207078575',
            'name' => 'plazaCircular',
            'information' => 'sdfbbbbshtr',
            'type' => '1',
            'start_point' => null,
            'radio' => '20',
            'border_color' => '#5CC1FF',
            'background_color' => '#FAF77F',
            'opacity' => '0.25',
        ]);

        DB::table('markers')->insert([
            'title' => 'Museo de Doña Pakyta',
            'latitude' => '36.83527',
            'length' => '-2.46344',
            'name' => 'museoDoñaPakyta',
            'information' => 'sbgfgnfgngn',
            'type' => '0',
            'start_point' => null,
            'radio' => null,
            'border_color' => null,
            'background_color' => null,
            'opacity' => null,
        ]);

        DB::table('markers')->insert([
            'title' => 'Calle Reina Regente',
            'latitude' => '36.83379889736059',
            'length' => '-2.4639100666575082',
            'name' => 'calleReinaRegenteInicio',
            'information' => 'sfbdfnbdfd',
            'type' => '0',
            'start_point' => null,
            'radio' => null,
            'border_color' => null,
            'background_color' => null,
            'opacity' => null,
        ]);

        DB::table('markers')->insert([
            'title' => 'Calle Reina Regente',
            'latitude' => '36.83540896595454',
            'length' => '-2.462928378189209',
            'name' => 'calleReinaRegenteFin',
            'information' => 'dgsagbdhfbdf',
            'type' => '0',
            'start_point' => null,
            'radio' => null,
            'border_color' => null,
            'background_color' => null,
            'opacity' => null,
        ]);

        DB::table('markers')->insert([
            'title' => 'Plaza San Sebastian',
            'latitude' => '36.84209',
            'length' => '-2.46296',
            'name' => 'plazaSanSebastian',
            'information' => 'fgbadfbdafb',
            'type' => '0',
            'start_point' => null,
            'radio' => null,
            'border_color' => null,
            'background_color' => null,
            'opacity' => null,
        ]);

        DB::table('markers')->insert([
            'title' => 'Plaza Vieja',
            'latitude' => '36.840299167182714',
            'length' => '-2.4673508531189756',
            'name' => 'plazaVieja',
            'information' => 'dfhbdn',
            'type' => '1',
            'start_point' => null,
            'radio' => '150',
            'border_color' => '#5CC1FF',
            'background_color' => '#FAF77F',
            'opacity' => '0.25',
        ]);

        DB::table('markers')->insert([
            'title' => 'Pingunrucho',
            'latitude' => '36.840364166645024',
            'length' => '-2.467280681008681',
            'name' => 'pingurucho',
            'information' => 'dfbdfbf',
            'type' => '0',
            'start_point' => null,
            'radio' => null,
            'border_color' => null,
            'background_color' => null,
            'opacity' => null,
        ]);

        DB::table('markers')->insert([
            'title' => 'Ayuntamiento de Almeria',
            'latitude' => '36.84013870879265',
            'length' => '-2.4676391905932356',
            'name' => 'ayuntamientoAlmeria',
            'information' => 'sdbvdfsbfdbdf',
            'type' => '0',
            'start_point' => null,
            'radio' => null,
            'border_color' => null,
            'background_color' => null,
            'opacity' => null,
        ]);

        DB::table('markers')->insert([
            'title' => 'Estacion de Tren',
            'latitude' => '36.83468',
            'length' => '-2.45615',
            'name' => 'estacionTren',
            'information' => 'dfhsdfnfnfn',
            'type' => '0',
            'start_point' => null,
            'radio' => null,
            'border_color' => null,
            'background_color' => null,
            'opacity' => null,
        ]);

        DB::table('markers')->insert([
            'title' => 'Camino Cruz Caravaca',
            'latitude' => '36.850349919867284',
            'length' => '-2.4544953693318594',
            'name' => 'caminoCruzCaravacaInicio',
            'information' => 'sdnfgngfngfn',
            'type' => '0',
            'start_point' => null,
            'radio' => null,
            'border_color' => null,
            'background_color' => null,
            'opacity' => null,
        ]);

        DB::table('markers')->insert([
            'title' => 'Camino Cruz Caravaca',
            'latitude' => '36.856733590916456',
            'length' => '-2.4611706705957332',
            'name' => 'caminoCruzCaravacaFin',
            'information' => 'sdnfgngfngfn',
            'type' => '0',
            'start_point' => null,
            'radio' => null,
            'border_color' => null,
            'background_color' => null,
            'opacity' => null,
        ]);

        DB::table('markers')->insert([
            'title' => 'Molineta',
            'latitude' => '36.85048840935207',
            'length' => '-2.463165876625142',
            'name' => 'molineta',
            'information' => 'fbdfbbfbfb',
            'type' => '0',
            'start_point' => null,
            'radio' => null,
            'border_color' => null,
            'background_color' => null,
            'opacity' => null,
        ]);

        DB::table('markers')->insert([
            'title' => 'Cueva de la Campsa',
            'latitude' => '36.84109',
            'length' => '-2.48207',
            'name' => 'cuevaCampsa',
            'information' => 'asasfsdfsdgdfg',
            'type' => '0',
            'start_point' => null,
            'radio' => null,
            'border_color' => null,
            'background_color' => null,
            'opacity' => null,
        ]);

        DB::table('markers')->insert([
            'title' => 'Torre de los Perdigones',
            'latitude' => '36.84294027083929',
            'length' => '-2.461729549095982',
            'name' => 'torrePerdigones',
            'information' => 'dsvadfbdfbfad',
            'type' => '0',
            'start_point' => null,
            'radio' => null,
            'border_color' => null,
            'background_color' => null,
            'opacity' => null,
        ]);

        DB::table('markers')->insert([
            'title' => 'Barrio Alto',
            'latitude' => '36.844426825572754',
            'length' => '-2.454965830677139',
            'name' => 'barrioAlto',
            'information' => 'gfnfgnbf',
            'type' => '1',
            'start_point' => null,
            'radio' => '150',
            'border_color' => '#5CC1FF',
            'background_color' => '#FAF77F',
            'opacity' => '0.25',
        ]);

        DB::table('markers')->insert([
            'title' => 'Avenida Santa Isabel',
            'latitude' => '36.846019563057624',
            'length' => '-2.455607773969145',
            'name' => 'avenidaSantaIsabelInicio',
            'information' => 'sddbdfbdzf',
            'type' => '0',
            'start_point' => null,
            'radio' => null,
            'border_color' => null,
            'background_color' => null,
            'opacity' => null,
        ]);

        DB::table('markers')->insert([
            'title' => 'Avenida Santa Isabel',
            'latitude' => '36.84877022957813',
            'length' => '-2.4537131877258664',
            'name' => 'avenidaSantaIsabelFin',
            'information' => 'sddbdfbdzf',
            'type' => '0',
            'start_point' => null,
            'radio' => null,
            'border_color' => null,
            'background_color' => null,
            'opacity' => null,
        ]);

        DB::table('markers')->insert([
            'title' => 'Barrio de la Caridad',
            'latitude' => '36.84858919011009',
            'length' => '-2.4648717906966375',
            'name' => 'barrioCaridad',
            'information' => 'sddbdfbdzf',
            'type' => '0',
            'start_point' => null,
            'radio' => null,
            'border_color' => null,
            'background_color' => null,
            'opacity' => null,
        ]);

        DB::table('markers')->insert([
            'title' => 'Alcazaba',
            'latitude' => '36.84004520769246',
            'length' => '-2.4693843764004306',
            'name' => 'alcazaba',
            'information' => 'null',
            'type' => '2',
            'start_point' => null,
            'radio' => null,
            'border_color' => null,
            'background_color' => null,
            'opacity' => null,
        ]);
    }
}
