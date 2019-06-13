<!DOCTYPE html>
<html>
<head>
	<title>Todolist</title>
	<link rel="stylesheet" type="text/css" href="/css/app.css">
</head>
<body>
	@include('inc.navbar')
	<div class="container">
		@include('inc.messages')
		@yield('content')
	</div>

	<footer id="footer" class="text-center">
		<p>Copright &copy; 2019 Todolist</p>
	</footer>
</body>
</html>