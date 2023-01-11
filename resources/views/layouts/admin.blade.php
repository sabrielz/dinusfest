<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>

	<!-- Simple bar CSS -->
	<link rel="stylesheet" href="/tinydash/css/simplebar.css">
	<!-- Fonts CSS -->
	{{-- <link href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"> --}}
	<!-- Icons CSS -->
	<link rel="stylesheet" href="/tinydash/css/feather.css">

	<!-- Date Range Picker CSS -->
	{{-- <link rel="stylesheet" href="/tinydash/css/daterangepicker.css"> --}}
	<!-- App CSS -->
	<link rel="stylesheet" href="/tinydash/css/app-light.css" id="lightTheme">
	<link rel="stylesheet" href="/tinydash/css/app-dark.css" id="darkTheme" disabled>
	@stack('styles')
</head>
<body class="vertical  light">
	<div class="wrapper">
		@include('admin.components.navbar')
		@include('admin.components.sidebar')
		<main role="main" class="main-content">
			<div class="container-fluid">
				<div class="row justify-content-center">
					@yield('content')
				</div>
			</div>
		</main>
	</div>

	<script src="/tinydash/js/jquery.min.js"></script>
	<script src="/tinydash/js/popper.min.js"></script>
	<script src="/tinydash/js/moment.min.js"></script>
	<script src="/tinydash/js/bootstrap.min.js"></script>
	<script src="/tinydash/js/simplebar.min.js"></script>
	<script src='/tinydash/js/jquery.stickOnScroll.js'></script>
	<script src="/tinydash/js/tinycolor-min.js"></script>
	<script src="/tinydash/js/config.js"></script>
	<script src="/tinydash/js/apps.js"></script>
	@stack('scripts')
	{{-- <script> @stack('inscript') </script> --}}
</body>
</html>