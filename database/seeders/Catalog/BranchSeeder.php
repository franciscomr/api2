<?php

namespace Database\Seeders\Catalog;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Catalog\Branch;

class BranchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Branch::create([
            'organization_id' => 1,
            'name' => 'Mexico',
            'address' => 'Anahuac #120 Col El Mirador',
            'city' => 'Coyoacan',
            'state' => 'CDMX',
            'postal_code' => '04950',
            'created_by' => 'Administrador',
            'updated_by' => 'Administrador',
        ]);
        Branch::create([
            'organization_id' => 1,
            'name' => 'Leon',
            'address' => 'BLVD. Hidalgo No.2722 Fraccionamiento Las Aguilas',
            'city' => 'Leon',
            'state' => 'Guanajuato',
            'postal_code' => '37218',
            'created_by' => 'Administrador',
            'updated_by' => 'Administrador',
        ]);

        Branch::create([
            'organization_id' => 1,
            'name' => 'Puebla',
            'address' => 'AV. 25 Norte No.3642-A Col. Las Cuartillas',
            'city' => 'Puebla',
            'state' => 'Puebla',
            'postal_code' => '72050',
            'created_by' => 'Administrador',
            'updated_by' => 'Administrador',
        ]);

        Branch::create([
            'organization_id' => 1,
            'name' => 'Oaxaca',
            'address' => 'Carretera Internacional Cristobal Colon Tramo Oaxaca-Etla km 179+000',
            'city' => 'San Sebastian Etla',
            'state' => 'Oaxaca',
            'postal_code' => '68258',
            'created_by' => 'Administrador',
            'updated_by' => 'Administrador',
        ]);

        Branch::create([
            'organization_id' => 1,
            'name' => 'Tuxtla',
            'address' => 'Prolongacion Anillos de circunvalación No.715 Col Santa Elena',
            'city' => 'Tuxtla Gutierrez',
            'state' => 'Chiapas',
            'postal_code' => '69310',
            'created_by' => 'Administrador',
            'updated_by' => 'Administrador',
        ]);

        Branch::create([
            'organization_id' => 1,
            'name' => 'Monterrey',
            'address' => 'Av. Texcoco #701, Colonia Chapultepec',
            'city' => 'San Nicolás de los Garza',
            'state' => 'Nuevo Leon',
            'postal_code' => '66654',
            'created_by' => 'Administrador',
            'updated_by' => 'Administrador'
        ]);

        Branch::create([
            'organization_id' => 1,
            'name' => 'Tlalnepantla',
            'address' => 'Col. Antonio M. Rivera 26, Bodega 4 Centro',
            'city' => 'Tlalnepantla',
            'state' => 'Estado de México',
            'postal_code' => '12346',
            'created_by' => 'Administrador',
            'updated_by' => 'Administrador'
        ]);

        Branch::create([
            'organization_id' => 1,
            'name' => 'Brenamiel',
            'address' => 'Carretera Internacional No.2612  Colonia del Maestro',
            'city' => 'Pueblo Nuevo',
            'state' => 'Oaxaca',
            'postal_code' => '68285',
            'created_by' => 'Administrador',
            'updated_by' => 'Administrador'
        ]);

        Branch::create([
            'organization_id' => 1,
            'name' => 'Diamante',
            'address' => 'Carretera Internacional kilómetro 2.5 No.104',
            'city' => 'San Agustin Yatareni',
            'state' => 'Oaxaca',
            'postal_code' => '71228',
            'created_by' => 'Administrador',
            'updated_by' => 'Administrador',
        ]);

        Branch::create([
            'organization_id' => 2,
            'name' => 'Tepelmeme',
            'address' => 'Carretera Cuacnopalan Tehuacán Oaxaca km123+640',
            'city' => 'Tepelmeme de Morelos',
            'state' => 'Oaxaca',
            'postal_code' => '69310',
            'created_by' => 'Administrador',
            'updated_by' => 'Administrador',
        ]);
    }
}
