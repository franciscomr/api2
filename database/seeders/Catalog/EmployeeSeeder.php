<?php

namespace Database\Seeders\Catalog;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Catalog\Employee;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Employee::create(
            [
                'branch_id' => 4,
                'position_id' => 15,
                'employee_id' => 'E03583',
                'names' => 'Francisco',
                'first_surname' => 'Martinez',
                'second_surname' => 'Ramirez',
                'created_by' => 'Administrador',
                'updated_by' => 'Administrador',
            ]
        );
        Employee::create(
            [
                'branch_id' => 2,
                'position_id' => 15,
                'employee_id' => 'E04460',
                'names' => 'Marco Antonio',
                'first_surname' => 'Panales',
                'second_surname' => 'Nuñez',
                'created_by' => 'Administrador',
                'updated_by' => 'Administrador',
            ]
        );
        Employee::create(
            [
                'branch_id' => 3,
                'position_id' => 15,
                'employee_id' => 'E07601',
                'names' => 'Francisco Javier',
                'first_surname' => 'Quinto',
                'second_surname' => 'Jimenez',
                'created_by' => 'Administrador',
                'updated_by' => 'Administrador',
            ]
        );
        Employee::create(
            [
                'branch_id' => 5,
                'position_id' => 15,
                'employee_id' => 'E08692',
                'names' => 'Juan Carlos',
                'first_surname' => 'Avendaño',
                'second_surname' => 'Anza',
                'created_by' => 'Administrador',
                'updated_by' => 'Administrador',
            ]
        );
    }
}
