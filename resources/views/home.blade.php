@extends('layouts.app')
@section('title')
		{{ 'Home' }}
@endsection
@php
		if (!isset($menu)) {
		    $menu = 'Organizaciones';
		}
@endphp
@section('content')
		<div>
				<Dashboard :menu="{{ json_encode($menu) }}">
				</Dashboard>
		</div>
@endsection
