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
    <link rel="icon" type="image/png" sizes="16x16" href="/matrix/img/favicon.png" />
		<link rel="stylesheet" href="/plugins/fontawesome-free/css/all.min.css">
		{{-- <link rel="stylesheet" href="/bootstrap/css/bootstrap-reboot.min.css"> --}}
		<link rel="stylesheet" href="/dist/css/landingpage.css">
		@stack('styles')
  </head>
  <body>

		@yield('body')
		
		{{-- Javascript --}}
    <script src="/plugins/jquery/dist/jquery.min.js"></script>
		<script src="/bootstrap/js/bootstrap.bundle.min.js"></script>
		@stack('scripts')
  </body>
</html>