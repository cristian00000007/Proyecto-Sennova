@extends('layouts.header')
@section('content')
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
</head>
<body class="vertical-layout vertical-menu-modern blank-page navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="blank-page">
    <!-- BEGIN: Content-->
            <div class="content-body">
                <div class="auth-wrapper auth-cover">
                    <div class="auth-inner row m-0">
                        <!-- Left Text-->
                        <div class="d-none d-lg-flex col-lg-8 align-items-center p-5">
                            <div class="w-100 d-lg-flex align-items-center justify-content-center px-5"><img src="{{ asset('images/logo/logo-sena-verde-png-sin-fondo.png') }}"></div>
                        </div>
                        <!-- /Left Text-->
                        <!-- Login-->
                        <div class="d-flex col-lg-4 align-items-center auth-bg px-2 p-lg-5">
                            <div class="col-12 col-sm-8 col-md-6 col-lg-12 px-xl-2 mx-auto tooltip-validations" >
                                <h2 class="card-title fw-bold mb-1">Bienvenido Al SENA</h2>
                                <form class="auth-login-form mt-2 needs-validation" novalidate method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="mb-1 position-relative">
                                        <label class="form-label" for="email">Email</label>
                                        <input class="form-control" id="email" type="email" name="email" placeholder="john@example.com" aria-describedby="email" autofocus="" tabindex="1" value="{{ old('email') }}" required/>
                                        <div class="invalid-tooltip">El Correo Es Obligatorio.</div>
                                    </div>

                                    <div class="mb-1 position-relative">
                                        <div class="d-flex justify-content-between">
                                            @if (Route::has('password.request'))
                                            <label class="form-label" for="password">Contraseña</label><a  href="{{ route('password.request') }}"><small style="color: green;">Recuperar Contraseña</small></a>
                                        @endif
                                        </div>
                                        <br>
                                        <div class="input-group form-password-toggle">
                                            <input class="form-control form-control-merge" id="password" type="password" name="password" placeholder="············" aria-describedby="password" tabindex="2" required/><span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
                                            <div class="invalid-tooltip">La Contraseña Es incorrecta.</div>
                                        </div>
                                    </div>
                                    <br>
                                    <button type="submit" class="btn btn-primary w-100" tabindex="4">ENTRAR</button>

                                </form>
                                <p class="text-center mt-2"><span>No estas registrado?</span><a href="{{ route('register') }}"><span style="color: green;">&nbsp;Registrar</span></a></p>
                            </div>
                        </div>
                        <!-- /Login-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Page JS-->


</body>
<!-- END: Body-->

</html>
<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})()
</script>
@endsection
