@extends('layouts.app')
@php
		if (!isset($title)) {
		    $title = 'Organizaciones';
		}
@endphp
@section('title')
		{{ $title }}
@endsection

@section('content')
		<Dashboard>
				<template #content>
						<data-table :basepath="{{ json_encode($basepath) }}"
								:fields="[
								    { label: 'ID', name: 'id' },
								    { label: 'Organizacion', name: 'name' },
								    { label: 'Razon Social', name: 'businessName' },
								    { label: 'Direccion', name: 'address' },
								    { label: 'Poblacion', name: 'city' },
								    { label: 'Estado', name: 'state' },
								    { label: 'C P', name: 'postalCode' },
								    { label: 'Creado Por', name: 'createdBy' },
								    { label: 'Creado a las', name: 'createdAt' },
								    { label: 'Actualizado Por', name: 'updatedBy' },
								    { label: 'Actualizado a las', name: 'updatedAt' },
								]">

						</data-table>
				</template>
		</Dashboard>
@endsection
