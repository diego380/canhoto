<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
	<title>@yield('titulo') - Mixfarma Gestão</title>

	<!-- CSS  -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
	<link href="/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
	
	<header>
		
		<ul class="dropdown-content" id="user_dropdown">
			<li><a class="black-text" href="#!">Profile</a></li>
			<li><a class="black-text" href="#!">Profile</a></li>
			<li><a class="black-text" href="#!">Profile</a></li>
			<li><a class="black-text" href="#!">Profile</a></li>
		</ul>

		<nav class="light-green lighten-3" role="navigation">
			<div class="nav-wrapper">
				<a data-activates="slide-out" class="button-collapse show-on-" href="#!"><img style="margin-top: 17px; margin-left: 5px;" src="" /></a>

				<ul class="right hide-on-med-and-down">
					<li>
						<a class='right dropdown-button' href='' data-activates='user_dropdown'><i class=' material-icons'>account_circle</i></a>
					</li>
				</ul>

				<a href="#" data-activates="slide-out" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
			</div>
		</nav>
	</header>

	<main>
		@yield('conteudo')
	</main>

	<footer class="light-green lighten-3 page-footer">
		<div class="light-green lighten-3 footer-copyright">
			<div class="container">
				<span class="black-text">Criado por: <b><a href="https://github.com/diego380/canhoto" target="_blank">Diego Melo</a></b></span>
			</div>
		</div>
	</footer>

	
	<!--  Scripts-->
	<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script src="/js/materialize.js"></script>
	<script src="/js/init.js"></script>
	<script src="/js/app.js"></script>

</body>
</html>
