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
                'employeeId' => 'E03583',
                'names' => 'Francisco',
                'firstSurname' => 'Martinez',
                'secondSurname' => 'Ramirez',
                'createdBy' => 'Administrador',
                'updatedBy' => 'Administrador',
            ]
        );
        Employee::create(
            [
                'branch_id' => 2,
                'position_id' => 15,
                'employeeId' => 'E04460',
                'names' => 'Marco Antonio',
                'firstSurname' => 'Panales',
                'secondSurname' => 'Nuñez',
                'createdBy' => 'Administrador',
                'updatedBy' => 'Administrador',
            ]
        );
        Employee::create(
            [
                'branch_id' => 3,
                'position_id' => 15,
                'employeeId' => 'E07601',
                'names' => 'Francisco Javier',
                'firstSurname' => 'Quinto',
                'secondSurname' => 'Jimenez',
                'createdBy' => 'Administrador',
                'updatedBy' => 'Administrador',
            ]
        );
        Employee::create(
            [
                'branch_id' => 5,
                'position_id' => 15,
                'employeeId' => 'E08692',
                'names' => 'Juan Carlos',
                'firstSurname' => 'Avendaño',
                'secondSurname' => 'Anza',
                'createdBy' => 'Administrador',
                'updatedBy' => 'Administrador',
            ]
        );
    }
}
