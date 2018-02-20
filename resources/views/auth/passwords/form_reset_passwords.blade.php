<form class="login-form" method="POST" action="{{ route('password.email') }}">
    {{ csrf_field() }}
    <<div class="row">
        <div class="input-field col s12 center">
            <img src="/img/logo2.png" id="login_logo" alt="" class="responsive-img valign profile-image-login">
            <!-- <p class="center login-form-text">W3lessons - Material Design Login Form</p> -->
        </div>
    </div>
    <div class="row">
        <div class="input-field col s12 center">
            <h5 class="left login-form-text"><b>Recuperar senha:</b></h5>
        </div>
    </div>
    <div class="row">
        <div class="input-field col m12 s12">
            <input id="email" type="email" name="email" class="validate" required>
            <label for="email">Email</label>
        </div>
    </div>
    <div class="row">
        <div class="col m6">
            <p class="left-align">
                <a href="{{ url('/') }}" class="btn tooltipped deep-orange lighten-2" data-position="top" data-delay="50" data-tooltip="Voltar para a página inicial">VOLTAR</a>
            </p>
        </div>
        <div class="col m6">
            <p class="right-align">
                <button type="submit" class="btn waves-effect waves-light" type="button" name="action">recuperar</button>
            </p>
        </div>
    </div>
</form>

