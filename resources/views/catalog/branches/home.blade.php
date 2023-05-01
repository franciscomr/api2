@extends('layouts.app')
@section('title')
		{{ 'Sucursales' }}
@endsection
@php
		if (!isset($menu)) {
		    $menu = session('menu');
		}
		echo session()->get('message');
		$basepath = 'catalog.branches';
@endphp
@section('content')
		<Dashboard :menu="{{ json_encode($menu) }}">
				<template #content>
						@if (Session::has('message'))
								<Alert></Alert>
						@endif
						<data-table :basepath="{{ json_encode('catalog.branches') }}"
								:fields="[
								    { label: 'Sucursal', name: 'name' },
								    { label: 'Direccion', name: 'address' },
								    { label: 'Poblacion', name: 'city' },
								    { label: 'Estado', name: 'state' },
								    { label: 'C P', name: 'postalCode' },
								    { label: 'Creado Por', name: 'createdBy' },
								    { label: 'Creado a las', name: 'createdAt', filter: 'date' },
								    { label: 'Actualizado Por', name: 'updatedBy' },
								    { label: 'Actualizado a las', name: 'updatedAt', filter: 'date' },
								]">
						</data-table>
				</template>
		</Dashboard>
@endsection
