<?php

namespace Database\Seeders\Catalog;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Catalog\Department;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Department::create(
            [
                'name' => 'Administracion de Inventarios',
                'created_by' => 'Administrador',
                'updated_by' => 'Administrador',
            ]
        );
        Department::create(
            [
                'name' => 'Administracion y Finanzas',
                'created_by' => 'Administrador',
                'updated_by' => 'Administrador',
            ]
        );
        Department::create(
            [
                'name' => 'Almacen',
                'created_by' => 'Administrador',
                'updated_by' => 'Administrador',
            ]
        );
        Department::create(
            [
                'name' => 'Archivo',
                'created_by' => 'Administrador',
                'updated_by' => 'Administrador',
            ]
        );
        Department::create(
            [
                'name' => 'Auditoria Interna',
                'created_by' => 'Administrador',
                'updated_by' => 'Administrador',
            ]
        );
        Department::create(
            [
                'name' => 'Capital Humano',
                'created_by' => 'Administrador',
                'updated_by' => 'Administrador',
            ]
        );
        Department::create(
            [
                'name' => 'Centro de Soluciones',
                'created_by' => 'Administrador',
                'updated_by' => 'Administrador',
            ]
        );
        Department::create(
            [
                'name' => 'Cielo Mixteco',
                'created_by' => 'Administrador',
                'updated_by' => 'Administrador',
            ]
        );
        Department::create(
            [
                'name' => 'Compras',
                'created_by' => 'Administrador',
                'updated_by' => 'Administrador',
            ]
        );
        Department::create(
            [
                'name' => 'Contabilidad',
                'created_by' => 'Administrador',
                'updated_by' => 'Administrador',
            ]
        );
        Department::create(
            [
                'name' => 'Contraloria Cedis',
                'created_by' => 'Administrador',
                'updated_by' => 'Administrador',
            ]
        );
        Department::create(
            [
                'name' => 'Credito y Cobranza',
                'created_by' => 'Administrador',
                'updated_by' => 'Administrador',
            ]
        );
        Department::create(
            [
                'name' => 'Cuentas por Pagar',
                'created_by' => 'Administrador',
                'updated_by' => 'Administrador',
            ]
        );
        Department::create(
            [
                'name' => 'Direccion General',
                'created_by' => 'Administrador',
                'updated_by' => 'Administrador',
            ]
        );
        Department::create(
            [
                'name' => 'Informacion Comercial',
                'created_by' => 'Administrador',
                'updated_by' => 'Administrador',
            ]
        );
        Department::create(
            [
                'name' => 'Ingenieria de Producto',
                'created_by' => 'Administrador',
                'updated_by' => 'Administrador',
            ]
        );
        Department::create(
            [
                'name' => 'Juridico',
                'created_by' => 'Administrador',
                'updated_by' => 'Administrador',
            ]
        );
        Department::create(
            [
                'name' => 'Limpieza',
                'created_by' => 'Administrador',
                'updated_by' => 'Administrador',
            ]
        );
        Department::create(
            [
                'name' => 'Logistica y Distribucion',
                'created_by' => 'Administrador',
                'updated_by' => 'Administrador',
            ]
        );
        Department::create(
            [
                'name' => 'Mantenimiento',
                'created_by' => 'Administrador',
                'updated_by' => 'Administrador',
            ]
        );
        Department::create(
            [
                'name' => 'Mercadotecnia',
                'created_by' => 'Administrador',
                'updated_by' => 'Administrador',
            ]
        );
        Department::create(
            [
                'name' => 'Seguridad Patrimonial',
                'created_by' => 'Administrador',
                'updated_by' => 'Administrador',
            ]
        );
        Department::create(
            [
                'name' => 'Soporte Técnico y Desarrollo',
                'created_by' => 'Administrador',
                'updated_by' => 'Administrador',
            ]
        );
        Department::create(
            [
                'name' => 'Telemarketing',
                'created_by' => 'Administrador',
                'updated_by' => 'Administrador',
            ]
        );
        Department::create(
            [
                'name' => 'Tesoreria',
                'created_by' => 'Administrador',
                'updated_by' => 'Administrador',
            ]
        );
        Department::create(
            [
                'name' => 'Union',
                'created_by' => 'Administrador',
                'updated_by' => 'Administrador',
            ]
        );
        Department::create(
            [
                'name' => 'Ventas',
                'created_by' => 'Administrador',
                'updated_by' => 'Administrador',
            ]
        );
    }
}
