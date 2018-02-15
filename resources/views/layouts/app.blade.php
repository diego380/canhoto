<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
	<title>@yield('titulo') - Mixfarma Gestão</title>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
	<link href="/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
	<header>
		<nav class="light-green lighten-3">
			<ul class="dropdown-content" id="comp-menu3">
				<li><a href="#">Editar perfil</a></li>
				<li class="active">
					<a href="{{ route('logout') }}" onclick="event.preventDefault();
					document.getElementById('logout-form').submit();">
						Sair
					</a>
					<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    					{{ csrf_field() }}
					</form>
				</li>
			</ul>
			<ul class="dropdown-content" id="mob-menu3">
				<li><a href="#">Editar perfil</a></li>
				<li class="active"><a href="{{ route('logout') }}">Sair</a></li>
			</ul>
			<div class="nav-wrapper">
				<li class="brand-logo">Logo</li>
				<a href="#" class="button-collapse" data-activates="mobile-menu"><i class="material-icons" id="hamburger-icon">menu</i></a>
				<ul class="right hide-on-med-and-down" id="comp-menu">
					<li class="active">
						<a href="#" data-activates="comp-menu3" class="dropdown-button">
							<i class="material-icons left">account_circle</i>Menu 3
							<i class="material-icons right">arrow_drop_down</i>
						</a>
					</li>
				</ul>
				<ul class="side-nav" id="mobile-menu">
					<li class="active">
						<a href="#" data-activates="mob-menu3" class="dropdown-button">
							<i class="material-icons left">account_circle</i>Menu 3
							<i class="material-icons right">arrow_drop_down</i>
						</a>
					</li>
				</ul>
			</div>
		</nav>
	</header>
	<main>
		@yield('conteudo')
	</main>
	<footer class="page-footer light-green lighten-3">
		<div class="footer-copyright light-green lighten-3">
			<div class="container">
            	<b class="black-text">© Diego Melo</b>
            	<a class="grey-text text-lighten-4 right" href="https://github.com/diego380/canhoto">
            		<img src="/img/github.png" alt="Github" class="img-footer circle responsive-img">
            	</a>
            	<a class="grey-text text-lighten-4 right" href="https://www.facebook.com/ddiegomelo">
            		<img src="/img/facebook.png" alt="Facebook" class="img-footer circle responsive-img">
            	</a>
            	<a class="grey-text text-lighten-4 right" href="https://www.instagram.com/ddiegomelo/">
            		<img src="/img/Instagram.png" alt="Instagram" class="img-footer circle responsive-img">
            	</a>
            </div>
		</div>
	</footer>
	<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script src="/js/materialize.js"></script>
	<script src="/js/init.js"></script>
	<script src="/js/app.js"></script>
</body>
</html>
