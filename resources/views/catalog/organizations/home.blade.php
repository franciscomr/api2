@extends('layouts.app')
@section('title')
		{{ 'Organizaciones' }}
@endsection
@php
		if (!isset($menu)) {
		    $menu = session('menu');
		}
		$basepath = 'catalog.organizations';
@endphp
@section('content')
		<Dashboard :menu="{{ json_encode($menu) }}">
				<template #content>
						@if (Session::has('message'))
								<Alert></Alert>
						@endif
						<data-table :basepath="{{ json_encode('catalog.organizations') }}"
								:fields="[
								    { label: 'Organizacion', name: 'name' },
								    { label: 'Razon Social', name: 'businessName' },
								    { label: 'Direccion', name: 'address' },
								    { label: 'Poblacion', name: 'city' },
								    { label: 'Estado', name: 'state' },
								    { label: 'C P', name: 'postalCode' },
								    { label: 'Creado Por', name: 'createdBy' },
								    { label: 'Creado a las', name: 'createdAt', filter: 'date' },
								    { label: 'Actualizado Por', name: 'updatedBy' },
								    { label: 'Actualizado a las', name: 'updatedAt', filter: 'date' },
								]"
								:actions="[
								    { name: 'edit', redirect: true, icon: 'pencil-icon', tooltip: 'Editar Registro' }
								]">
						</data-table>
				</template>
		</Dashboard>
@endsection
