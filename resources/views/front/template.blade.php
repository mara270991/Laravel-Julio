<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<title> @yield('pageTitle') </title>
    @include('front.link')
	</head>
	<body>
		@include('front.navbar')

    @yield('mainContent')
		
		@yield('content')

		@include('front.footer')
	</body>
</html>
