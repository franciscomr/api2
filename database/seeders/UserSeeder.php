<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
                $francisco_martinez = User::create(
            [
                'employee_id' => 1,
                'name' => 'Francisco Martinez',
                'username' => 'francisco.martinez',
                'email' => 'francisco.martinez@sagaji.com.mx',
                'password' => bcrypt(config('app.name')),
                'createdBy' => 'Administrador',
                'updatedBy' => 'Administrador',
            ]
        );


        $marco_panales = User::create(
            [
                'employee_id' => 2,
                'name' => 'Marco Panales',
                'username' => 'marco.panales',
                'email' => 'marco.panales@sagaji.com.mx',
                'password' => bcrypt(config('app.name')),
                'createdBy' => 'Administrador',
                'updatedBy' => 'Administrador',
            ]
        );
    }
}
