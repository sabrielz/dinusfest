@extends('layouts.main')

@push('styles')
	<link rel="stylesheet" href="/plugins/fontawesome-free/css/all.min.css">
	<link rel="stylesheet" href="/dist/css/landingpage.css">
	<link rel="stylesheet" href="/bootstrap/css/bootstrap-reboot.min.css">
@endpush

@section('body')
	<div id="wrapper" class="w-full min-h-screen flex justify-between items-center flex-col bg-light">
		@include('landingpage.components.navbar')
		<div id="content" class="flex-1 w-full flex justify-center items-center flex-col">
			@yield('content')
		</div>
		@include('landingpage.components.footer')
	</div>
@endsection

@push('scripts')
	<script src="/bootstrap/js/bootstrap.bundle.min.js"></script>
@endpush