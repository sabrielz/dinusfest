@extends('layouts.main')

@push('styles')
	<link href="/ample/css/style.min.css" rel="stylesheet">
@endpush

@section('body')
	<div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
		data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">

		@include('dashboard.components.preloader')
		
		@include('dashboard.components.header')
		@include('dashboard.components.sidebar')
		<div class="page-wrapper">
			@include('dashboard.components.breadcrumb')
			<div class="container-fluid">
				@yield('container')
			</div>
			@include('dashboard.components.footer')
		</div>
	</div>
@endsection

@push('scripts')
	<script src="/plugins/bootstrap/dist/js/bootstrap.min.js"></script>
	<script src="/plugins/jquery/dist/jquery.min.js"></script>
	<!-- Bootstrap tether Core JavaScript -->
	<script src="bootstrap/dist/js/bootstrap.bundle.min.js"></script>
	<script src="/ample/js/app-style-switcher.js"></script>
	<script src="/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>
	<!--Wave Effects -->
	<script src="/ample/js/waves.js"></script>
	<!--Menu sidebar -->
	<script src="/ample/js/sidebarmenu.js"></script>
@endpush