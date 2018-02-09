<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Mixfarma Gestão</title>
  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
    <div class="section"></div>
    <main>
        <center>
            <div class="section"></div>
            <div class="container">
                <div class="z-depth-1 grey lighten-4 row corpo_login">
                    <form class="col s12" method="post" action="{{ route('login') }}">
                        {{ csrf_field() }}
                        <div class='row'>
                            <div class='col s12'>
                                <img class="responsive-img" style="width: 250px;" src="/img/logoMix.png" />
                            </div>
                        </div>
                        <div class='row'>
                            <div class='input-field col s12'>
                                <input class='validate' type='email' name='email' id='email' />
                                <label for='email'>Digite seu email</label>
                            </div>
                        </div>
                        <div class='row'>
                            <div class='input-field col s12'>
                                <input class='validate' type='password' name='password' id='password' />
                                <label for='password'>Digite sua senha</label>
                            </div>
                            <label style='float: right;'>
                                <a class='pink-text' href='#!'><b>Esqueceu a senha?</b></a>
                            </label>
                            <label style='float: left;'>
                                <a class='blue-text' href='#!'><b>Cadastre-se!</b></a>
                            </label>
                        </div>
                        <br />
                        <center>
                            <div class='row'>
                                <button type='submit' name='btn_login' class='col s12 btn btn-large waves-effect green darken-1'>Entrar</button>
                            </div>
                        </center>
                    </form>
                </div>
            </div>
        </center>
        <div class="section"></div>
        <div class="section"></div>
    </main>
    <!--  Scripts-->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="/js/materialize.js"></script>
    <script src="/js/init.js"></script>
</body>
</html>