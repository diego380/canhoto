@extends('layouts.app_home')
@section('titulo','Home')
@section('conteudo')

<div id="login-page" class="row">
	<div class="col s12 z-depth-6 card-panel">
		<form class="login-form" action="{{ route('login') }}" method="post">
			{{ csrf_field() }}
			<div class="row">
				<div class="input-field col s12 center">
					<img src="/img/logoMix.jpg" alt="" class="responsive-img valign profile-image-login">
					<!-- <p class="center login-form-text">W3lessons - Material Design Login Form</p> -->
				</div>
			</div>
			<div class="row margin">
				<div class="input-field col s12">
					<i class="material-icons prefix">email</i>
					<input class="validate" id="email" type="email" name="email">
					<label for="email" class="center-align">Email</label>
				</div>
			</div>
			<div class="row margin">
				<div class="input-field col s12">
					<i class="material-icons prefix">vpn_key</i>
					<input id="password" type="password" name="password">
					<label for="password">Password</label>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s12 m12 l12  login-text">
					<input type="checkbox" id="remember-me" />
					<label for="remember-me">Lembre-me</label>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s12">
					<button class="btn waves-effect waves-light col s12" type="submit">Entrar</button>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s6 m6 l6">
					<p class="margin medium-small"><a href="{{ route('register') }}">Cadastre-se!</a></p>
				</div>
				<div class="input-field col s6 m6 l6">
					<p class="margin right-align medium-small"><a href="forgot-password.html">Recuperar senha?</a></p>
				</div>
			</div>
		</form>
	</div>
</div>
@endsection