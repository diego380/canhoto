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
		<nav class="light-green lighten-3">
			<ul class="dropdown-content" id="comp-menu3">
				<li><a href="#">Sub-Menu1</a></li>
				<li><a href="#">Sub-Menu2</a></li>	
				<li><a href="#">Sub-Menu3</a></li>
			</ul>
			<ul class="dropdown-content" id="mob-menu3">
				<li><a href="#">Sub-Menu1</a></li>
				<li><a href="#">Sub-Menu2</a></li>	
				<li><a href="#">Sub-Menu3</a></li>
			</ul>

			<div class="nav-wrapper">
				<li class="brand-logo">Logo</li>

				<a href="#" class="button-collapse" data-activates="mobile-menu"><i class="material-icons" id="hamburger-icon">menu</i></a>

				<ul class="right hide-on-med-and-down" id="comp-menu">
					<li><a href="#">Menu 1</a></li>
					<li><a href="#">Menu 2</a></li> 
					<li>
						<a href="#" data-activates="comp-menu3" class="dropdown-button">
							<i class="material-icons left">account_circle</i>Menu 3
							<i class="material-icons right">arrow_drop_down</i>
						</a>
					</li>
				</ul>

				<ul class="side-nav" id="mobile-menu">
					<li><a href="#">Menu 1</a></li>
					<li><a href="#">Menu 2</a></li>
					<li>
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
	<footer class = "page-footer">
		<div class = "footer-copyright">
			<div class = "container">
				© 2016 Copyright Information
				<a class = "grey-text text-lighten-4 right" href = "#!">Links</a>
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
