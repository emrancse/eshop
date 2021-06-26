<!DOCTYPE html>
<html>
<head>
	<title>My Awesome Login Page</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" >
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="{{ asset('backend/css/loginform.css') }}">
</head>
<!--Coded with love by Mutiullah Samim-->
<body>

        <div class="container h-100">
            <div class="d-flex justify-content-center h-100">
                <div class="user_card">

                    <div class="d-flex justify-content-center">
                        <div class="brand_logo_container">
                            <img src="https://cdn.freebiesupply.com/logos/large/2x/pinterest-circle-logo-png-transparent.png" class="brand_logo" alt="Logo">
                        </div>
                    </div>


                    <div class="d-flex justify-content-center form_container">

                        <form action="{{ route('admin.loginProcess')}}" method="POST">
                            @if (session('message'))
                             <div>{{ session('message') }}</div>
                           @endif
                            @csrf
                            <div class="input-group mb-3">
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                </div>
                                <input type="email" name="email" class="form-control input_user"
                                placeholder="Enter a valid email" value="{{ old('email') }}">
                            </div>

                                @error('email')
                                 <div class="alert alert-danger" role="alert"> {{ $message }}</div>
                              @enderror

                            <div class="input-group mb-2">
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                                </div>
                                <input type="password" name="password" class="form-control input_pass"
                                 placeholder="Enter your password"  value="{{ old('password') }}">
                            </div>

                                @error('password')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror


                            <div class="form-group">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customControlInline">
                                    <label class="custom-control-label" for="customControlInline">Remember me</label>
                                </div>
                            </div>
                                <div class="d-flex justify-content-center mt-3 login_container">
                         <button type="submit" name="submit" class="btn login_btn">Login</button>
                       </div>
                        </form>
                    </div>

                    <div class="mt-4">
                        <div class="d-flex justify-content-center links">
                            Don't have an account? <a href="#" class="ml-2">Sign Up</a>
                        </div>
                        <div class="d-flex justify-content-center links">
                            <a href="#">Forgot your password?</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
</body>
</html>
