<!DOCTYPE html>
<html dir="ltr" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
		
		{{-- Metadata --}}
    <meta name="robots" content="noindex, nofollow" />
		
		{{-- Page Settings --}}
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <title></title>

		{{-- Css --}}
    <link rel="icon" type="image/png" sizes="16x16" href="/dist/img/main-logo-icon.png" />
		<link rel="stylesheet" href="/plugins/fontawesome-free/css/all.min.css">
		{{-- <link rel="stylesheet" href="/bootstrap/css/bootstrap-reboot.min.css"> --}}
		<link rel="stylesheet" href="/dist/css/landingpage.css">
		@stack('styles')
  </head>
  <body>

    <div id="wrapper" class="w-full min-h-screen flex justify-between items-center flex-col bg-light">
			@include('landingpage.components.navbar')
			{{-- <div id="content" class="flex-1 w-full flex justify-center items-center flex-col"> --}}
				@yield('content')
			{{-- </div> --}}
			@include('landingpage.components.footer')
		</div>
		
		{{-- Javascript --}}
    <script src="/plugins/jquery/dist/jquery.min.js"></script>
		<script src="/bootstrap/js/bootstrap.bundle.min.js"></script>
		<script>
			$(function () {
	
				// Navbar Responsive
				var toggler = $('#navbarToggler');
				var menu = $('#navbarMenu');
				toggler.click((v) => {
					v.preventDefault();
					menu.toggle('hidden');
				});

				// Navbar Dropdown
				var toggler = $('.navbar-dropdown-toggler');
				toggler.click(v => {
					v.preventDefault();
					var menu = toggler.parent().children()[1];
					$(menu).toggle('hidden');
				})
				
			})
		</script>
		@stack('scripts')
  </body>
</html>