<!DOCTYPE html>
<html lang="en">
<head>
	<title>Iniciar Sesion</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="stylesheet" type="text/css" href="{{ asset ('login-kit/vendor/bootstrap/css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset ('login-kit/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset ('login-kit/fonts/Linearicons-Free-v1.0.0/icon-font.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset ('login-kit/vendor/animate/animate.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset ('login-kit/vendor/css-hamburgers/hamburgers.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset ('login-kit/vendor/animsition/css/animsition.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset ('login-kit/vendor/select2/select2.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset ('login-kit/vendor/daterangepicker/daterangepicker.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset ('login-kit/css/util.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset ('login-kit/css/main.css') }}">

</head>
<body style="background-color: #666666;">
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="{{ url(config('adminlte.login_url', 'login')) }}" method="post">
                {{ csrf_field() }}
					<span class="login100-form-title p-b-43">
						Inicia sesión para continuar
					</span>				                
					<div class="wrap-input100 validate-input {{ $errors->has('email') ? 'has-error' : '' }}">
						<input class="input100" type="email" name="email">
						<span class="focus-input100"></span>
                        <span class="label-input100">Email</span>
                    </div>
                    
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong style="color:#ff4c4c">{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
					
					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="password">
						<span class="focus-input100"></span>
                        <span class="label-input100">Contraseña</span>
                    </div>
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif

					<div class="flex-sb-m w-full p-t-3 p-b-32">
						
						<div>
							<a href="#" class="txt1">
								¿Olvidaste la contraseña?
							</a>
						</div>
					</div>
			

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Ingresar
						</button>
					</div>										
		    </form>

				<div class="login100-more" style="background-image: url('login-kit/images/bg-01.jpg');">
				</div>
			</div>
		</div>
	</div>
	
	<script src="{{ asset ('login-kit/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
	<script src="{{ asset ('login-kit/vendor/animsition/js/animsition.min.js') }}"></script>
	<script src="{{ asset ('login-kit/vendor/bootstrap/js/popper.js') }}"></script>
	<script src="{{ asset ('login-kit/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset ('login-kit/vendor/select2/select2.min.js') }}"></script>
	<script src="{{ asset ('login-kit/vendor/daterangepicker/moment.min.js') }}"></script>
	<script src="{{ asset ('login-kit/vendor/daterangepicker/daterangepicker.js') }}"></script>
	<script src="{{ asset ('login-kit/vendor/countdowntime/countdowntime.js') }}"></script>
    <script src="{{ asset ('login-kit/js/main.js') }}"></script>
    <script src="{{ asset ('js/sweetalert.js') }}"></script>

</body>
</html>