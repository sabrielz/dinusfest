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
		@stack('styles')
  </head>
  <body>

    @yield('body')
		
		{{-- Javascript --}}
    <script src="/plugins/jquery/dist/jquery.min.js"></script>
		@stack('scripts')
  </body>
</html>
