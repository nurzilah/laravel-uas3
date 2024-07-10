<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Register</title>
  <!-- Custom fonts for this template-->
  <link href="{{ asset('admin_assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  
  <!-- Custom styles for this template-->
  <link href="{{ asset('admin_assets/css/sb-admin-2.min.css') }}" rel="stylesheet">
  
  <!-- Google Sign-In API -->
  <script src="https://apis.google.com/js/platform.js" async defer></script>
  <meta name="google-signin-client_id" content="YOUR_GOOGLE_CLIENT_ID">
  
  <!-- Facebook SDK -->
  <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js"></script>
  <style>
      .bg-register-image {
          background: url('https://themewagon.github.io/insure/img/carousel-2.jpg') no-repeat center center;
          background-size: cover;
      }
  </style>
</head>
<body class="bg-gradient-primary">
  <div class="container">
    <div class="row justify-content-center">
        <div class="col-xl-10 col-lg-12 col-md-9">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-block bg-register-image"></div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <img src="https://themewagon.github.io/insure/img/icon/icon-02-primary.png" alt="Logo" class="mb-4" style="width: 100px; height: auto;">
                                    <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                                </div>
                                <form action="{{ route('register.save') }}" method="POST" class="user" id="registerForm">
                                    @csrf
                                    <div class="form-group">
                                        <input name="name" type="text" class="form-control form-control-user @error('name')is-invalid @enderror" id="exampleInputName" placeholder="Name">
                                        @error('name')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <input name="email" type="email" class="form-control form-control-user @error('email')is-invalid @enderror" id="exampleInputEmail" placeholder="Email Address">
                                        @error('email')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <input name="email_confirmation" type="email" class="form-control form-control-user @error('email_confirmation')is-invalid @enderror" id="exampleConfirmEmail" placeholder="Confirm Email Address">
                                        @error('email_confirmation')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <input name="password" type="password" class="form-control form-control-user @error('password')is-invalid @enderror" id="exampleInputPassword" placeholder="Password">
                                            @error('password')
                                                <span class="invalid-feedback">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-sm-6">
                                            <input name="password_confirmation" type="password" class="form-control form-control-user @error('password_confirmation')is-invalid @enderror" id="exampleRepeatPassword" placeholder="Repeat Password">
                                            @error('password_confirmation')
                                                <span class="invalid-feedback">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-user btn-block">Register Account</button>
                                </form>
                                <hr>
                                <div class="text-center">
                                    <a class="small" href="{{ route('login') }}">Already have an account? Login!</a>
                                </div>
                                <hr>
                                <!-- <div class="text-center">
                                    <div class="g-signin2" data-onsuccess="onGoogleSignIn"></div>
                                    <button onclick="fbLogin()" class="btn btn-primary btn-user btn-block">Register with Facebook</button>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
  
  <!-- Bootstrap core JavaScript-->
  <script src="{{ asset('admin_assets/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('admin_assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  
  <!-- Core plugin JavaScript-->
  <script src="{{ asset('admin_assets/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
  
  <!-- Custom scripts for all pages-->
  <script src="{{ asset('admin_assets/js/sb-admin-2.min.js') }}"></script>
  
  <!-- <script>
    function onGoogleSignIn(googleUser) {
      var profile = googleUser.getBasicProfile();
      var id_token = googleUser.getAuthResponse().id_token;
      // Send the ID token to your backend via AJAX
      $.ajax({
        type: 'POST',
        url: '/google-login',
        data: {
          token: id_token,
          _token: '{{ csrf_token() }}'
        },
        success: function(response) {
          // Handle or redirect after successful login
        }
      });
    }

    window.fbAsyncInit = function() {
      FB.init({
        appId     : 'YOUR_FACEBOOK_APP_ID',
        cookie    : true,
        xfbml     : true,
        version   : 'v11.0'
      });
      FB.AppEvents.logPageView();
    }; -->

    <!-- function fbLogin() {
      FB.login(function(response) {
        if (response.authResponse) {
          FB.api('/me', { fields: 'name,email' }, function(response) {
            // Send user details to your backend via AJAX
            $.ajax({
              type: 'POST',
              url: '/facebook-login',
              data: {
                name: response.name,
                email: response.email,
                _token: '{{ csrf_token() }}'
              },
              success: function(response) {
                // Handle or redirect after successful login
              }
            });
          });
        }
      }, { scope: 'public_profile,email' });
    }

    // Validate Email Confirmation
    document.getElementById('registerForm').addEventListener('submit', function(event) {
      var email = document.getElementById('exampleInputEmail').value;
      var email_confirmation = document.getElementById('exampleConfirmEmail').value;

      if (email !== email_confirmation) {
        event.preventDefault();
        var errorSpan = document.createElement('span');
        errorSpan.className = 'invalid-feedback';
        errorSpan.textContent = 'Email confirmation does not match.';
        document.getElementById('exampleConfirmEmail').parentNode.appendChild(errorSpan);
      }
    });
  </script> -->
</body>
</html>
