<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
	<title>@yield('titulo') - Mixfarma Gestão</title>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
	<link href="/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
	<link rel="icon" href="/img/favicon.png">
</head>
<body>
	@if(session()->has('erro'))
	<div class="card-panel red darken-1 row white-text">
		{{ session()->get('erro') }}
	</div>
	@elseif(session()->has('sucesso'))
	<div class="card-panel green darken-1 row white-text">
		{{ session()->get('sucesso') }}
	</div>
	@elseif($errors->any())
	<div class="card-panel red darken-1 row white-text">
		<ul>
			@foreach ($errors->all() as $error)
			<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
	@endif
	@yield('conteudo')
	<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script src="/js/materialize.js"></script>
	<script src="/js/init.js"></script>
</body>
</html>