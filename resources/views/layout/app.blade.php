<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container">
			<a class="navbar-brand" href="{{ url('/') }}">Todos App</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
						<a class="nav-link" href="{{ url('todos') }}">Todos</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="{{ url('new-todo') }}">Create Todo</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="container">
		@if(session()->has('success'))
			<div class="alert alert-success mt-3">
				{{ session()->get('success') }}
			</div>
		@endif
		@yield('content')
	</div>
</body>
</html>