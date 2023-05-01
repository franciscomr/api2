<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $menu = [
            'Catálogos' => [
                'title' => 'Catálogos',
                'icon' => 'bookshelf-icon',
                'menu' => [
                    'Organizaciones' => 'catalog.organizations.home',
                    'Sucursales' => 'catalog.branches.home',
                    'Departamentos' => 'catalog.departments.home',
                    'Puestos' => 'catalog.positions.home'
                ]
            ],
            'Inventario de Cómputo' => [
                'title' => 'Inventario de Cómputo',
                'icon' => 'monitor-cellphone-icon',
                'menu' => [
                    'Marcas' => 'catalog.organizations.home',
                    'Organizaciones' => 'catalog.organizations.home',
                    'Sucursales' => 'catalog.branches.home',
                    'Departamentos' => 'catalog.departments.home',
                    'Puestos' => 'catalog.positions.home',
                    'Nuevo' => 'catalog.departments.home',
                    'Otro' => 'catalog.positions.home',
                    'Nuevo1' => 'catalog.positions.home'
                ]
            ],
            'Mesa de Ayuda' => [
                'title' => 'Mesa de Ayuda',
                'icon' => 'lifebuoy-icon',
                'menu' => [
                    'Marcas' => 'catalog.organizations.home',
                    'Organizaciones' => 'catalog.organizations.home',
                    'Sucursales' => 'catalog.branches.home',
                    'Departamentos' => 'catalog.departments.home',
                    'Puestos' => 'catalog.positions.home',
                    'Mesa' => 'catalog.positions.home',
                    'Nuevo' => 'catalog.departments.home',
                    'Otro' => 'catalog.positions.home',
                    'Nuevo1' => 'catalog.positions.home'
                ]
            ]
        ];

        session(['menu' => $menu]);

        return view('home', compact('menu'));
    }
}
