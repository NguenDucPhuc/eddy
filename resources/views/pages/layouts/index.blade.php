<!DOCTYPE html>
<html lang="en">
@include('pages.layouts.head')
<body class="animsition">	
	<!-- Header -->
	@include('pages.layouts.header')	
	<!-- Product -->
	@yield('content')
	{{-- @include('layouts.content') --}}
	<!-- Footer -->
	@include('pages.layouts.footer')
	<!-- Modal1 -->
	{{-- @include('components.layouts.front-end.modal') --}}

	@include('pages.layouts.script')

	@yield('script')
</body>
</html>