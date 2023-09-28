<!doctype html>
<html lang="en">

<head>
<title>Login</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&amp;display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{asset('assets/login/css/font-awesome.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/login/css/style.css')}}">
<link rel="icon" type="image/png" href="{{asset('assets/frontend/images/neco-logo.png')}}">
<link rel="icon" href="{{asset('assets/frontend/images/neco-logo.png')}}" type="image/x-icon">

<body class="img js-fullheight" style="background-image: url(assets/login/images/bg.jpg);">
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section">Admin Login</h2>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="login-wrap p-0">
                        <h3 class="mb-4 text-center">Have an account?</h3>
                        <form action="{{ route('login') }}" method="POST" class="signin-form">
                            @csrf
                            <div class="form-group">
                                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="current-password">
                                

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <button type="submit" class="form-control btn btn-primary submit px-3">Sign In</button>
                            </div>
                            <div class="form-group d-md-flex">
                                <div class="w-50">
                                    <label class="checkbox-wrap checkbox-primary">Remember Me
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                </div>

                                <div class="w-50 text-md-right">
                                    @if (Route::has('password.request'))
                                    <a href="{{ route('password.request') }}" style="color: #fff">Forgot Password</a>
                                    @endif
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>
	<script src="{{asset('assets/login/js/jquery.min.js')}}"></script>
	<script src="{{asset('assets/login/js/popper.js')}}"></script>
	<script src="{{asset('assets/login/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('assets/login/js/main.js')}}"></script>
	
</body>

</html>
