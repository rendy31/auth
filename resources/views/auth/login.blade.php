<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Login Kaiadmin Bootstrap 5 Admin Dashboard</title>
    <meta content="width=device-width, initial-scale=1.0, shrink-to-fit=no" name="viewport" />
    <link rel="icon" href="{{url('assets/img/kaiadmin/favicon.ico')}}" type="image/x-icon" />

    <!-- Fonts and icons -->
    <script src="{{ url('assets/js/plugin/webfont/webfont.min.js') }}"></script>
    <script>
        WebFont.load({
            google: {
                "families": ["Public Sans:300,400,500,600,700"]
            },
            custom: {
                "families": ["Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands",
                    "simple-line-icons"
                ],
                urls: ['assets/css/fonts.min.css']
            },
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ url('assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ url('assets/css/plugins.min.css') }}" />
    <link rel="stylesheet" href="{{ url('assets/css/kaiadmin.min.css') }}" />
</head>

<body class="login bg-primary">
    <div class="wrapper wrapper-login">
        <div class="container container-login animated fadeIn">
            <h3 class="text-center">Sign In</h3>
            <div class="login-form">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-sub">
                        <div class="form-floating form-floating-custom mb-3">
                            <input id="email" name="email" type="text"
                                class="form-control  @error('email') is-invalid @enderror" value="{{ old('email') }}"
                                placeholder="email" required autofocus />
                            <label for="email">Email</label>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-floating form-floating-custom mb-3">
                            <input id="password" name="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" placeholder="password"
                                required />
                            <label for="password">Password</label>
                            <div class="show-password">
                                <i class="icon-eye"></i>
                            </div>
                            
                        </div>
                    </div>
                    <div class="row m-0">
                        <div class="d-flex form-sub">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="rememberme" />
                                <label class="form-check-label" for="rememberme">Remember Me</label>
                            </div>

                            <a href="#" class="link float-end">Forget Password ?</a>
                        </div>
                    </div>
                    <div class="form-action mb-3">
                        <button type="submit" class="btn btn-primary w-100 btn-login">
                            Sign In
                        </button>
                    </div>
                    {{-- <div class="login-account">
            <span class="msg">Don't have an account yet ?</span>
            <a href="#" id="show-signup" class="link">Sign Up</a>
          </div> --}}
                </form>
            </div>

        </div>

    </div>
    <script src="{{ url('assets/js/core/jquery-3.7.1.min.js') }}"></script>

    <script src="{{ url('assets/js/core/popper.min.js') }}"></script>
    <script src="{{ url('assets/js/core/bootstrap.min.js') }}"></script>
    <script src="{{ url('assets/js/kaiadmin.min.js') }}"></script>
</body>

</html>
