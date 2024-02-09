<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Partai Demokrasi Modern</title>
	@include('layout.header')

</head>
<body class="hold-transition sidebar-mini layout-fixed">
	<div class="wrapper">
		@include('layout.navbar')
		@include('layout.aside')

		@yield('content')

		@include('layout.footer')

		<aside class="control-sidebar control-sidebar-dark">
		</aside>
	</div>
</body>
@include('layout.script')
</html>