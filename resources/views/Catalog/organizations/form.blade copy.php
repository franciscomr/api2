@extends('layouts.app')
@php
		if (!isset($title)) {
		    $title = 'Organizaciones';
		}
		if (!isset($is_new_record)) {
		    $is_new_record = true;
		}
		if (!isset($title)) {
		    $title = 'Sucursales';
		}
		if (!isset($data)) {
		    $data = null;
		}
@endphp
@section('title')
		{{ $title }}
@endsection

@section('content')
		<Dashboard>
				<template #content>
						<data-form :basepath="{{ json_encode($basepath) }}" :new_record="{{ json_encode($is_new_record) }}"
								:fields="[{
								        label: 'Nombre de la Organización',
								        name: 'name',
								        type: 'input',
								        propieties: {
								            type: 'text',
								            required: true
								        }
								    },
								    {
								        label: 'Razón Social',
								        name: 'businessName',
								        type: 'input',
								        propieties: {
								            type: 'text',
								            required: true
								        }
								    },
								    { label: 'Dirección', name: 'address', type: 'input', propieties: { type: 'text', required: true } },
								    { label: 'Ciudad / Población', name: 'city', type: 'input', propieties: { type: 'text', required: true } },
								    { label: 'Estado', name: 'state', type: 'input', propieties: { type: 'text', required: true } },
								    { label: 'Codigo Postal', name: 'postalCode', type: 'input', propieties: { type: 'text', required: true } },
								]"
								:data="{{ json_encode($data) }}">

						</data-form>
				</template>
		</Dashboard>
@endsection
