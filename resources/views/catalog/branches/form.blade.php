@extends('layouts.app')
@section('title')
		{{ 'Sucursales' }}
@endsection
@php
		if (!isset($menu)) {
		    $menu = session('menu');
		}
		if (!isset($is_new_record)) {
		    $is_new_record = true;
		}
		if (!isset($data)) {
		    $data = null;
		}
		if (!isset($organizations)) {
		    $organizations = null;
		}
		$basepath = 'catalog.branches';
@endphp
@section('content')
		<div>
				<Dashboard :menu="{{ json_encode($menu) }}">
						<template #content>
								@if (Session::exists('message'))
										<Alert></Alert>
								@endif
								<data-form :basepath="{{ json_encode($basepath) }}" :new_record="{{ json_encode($is_new_record) }}"
										:fields="[{
										        label: 'Nombre de la Empresa',
										        name: 'organization_id',
										        type: 'select',
										        propieties: {
										            value: {{ json_encode($organizations) }},
										            required: true
										        }
										    },
										    {
										        label: 'Nombre de la Sucursal',
										        name: 'name',
										        type: 'input',
										        propieties: {
										            type: 'text',
										            required: true
										        }
										    },
										    {
										        label: 'Dirección',
										        name: 'address',
										        type: 'input',
										        propieties: {
										            type: 'text',
										            required: true
										        }
										    },
										    {
										        label: 'Ciudad / Población',
										        name: 'city',
										        type: 'input',
										        propieties: {
										            type: 'text',
										            required: true
										        }
										    },
										    {
										        label: 'Estado',
										        name: 'state',
										        type: 'input',
										        propieties: {
										            type: 'text',
										            required: true
										        }
										    },
										    {
										        label: 'Codigo Postal',
										        name: 'postalCode',
										        type: 'input',
										        propieties: {
										            type: 'text',
										            required: true
										        }
										    },
										]"
										:data="{{ json_encode($data) }}">

								</data-form>
						</template>
				</Dashboard>
		</div>
@endsection
