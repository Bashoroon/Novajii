
<!DOCTYPE html>
<html lang="en">
  <head>
   
   
    <link rel="stylesheet" href=" https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Meta -->
    <meta name="description" content="">
    <meta name="author" content="Agunfon">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/img/favicon.png')}}">
    
    <title>Looks like the real project</title>

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{asset('assets/lib/remixicon/fonts/remixicon.css')}}">
    <link rel="stylesheet" href="{{asset('assets/lib/prismjs/themes/prism.min.css')}}">

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/style.min.css')}}">
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css'> 
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>   
    
  </head>
  </html>      
  <body class="page-sign d-block py-0">
    <form method="" action="{{route('login')}}">
        @csrf
    <div class="row g-0">
      <div class="col-md-7 col-lg-5 col-xl-4 col-wrapper">
        <div class="card card-sign">
          <div class="card-header">
            <a href="" class="header-logo mb-5">NOVAJII</a>
            <h3 class="card-title">Sign In</h3>
            <p class="card-text">Welcome back! Please signin to continue.</p>
          </div><!-- card-header -->
          <div class="card-body">
            <div class="mb-4">
              <label class="form-label">Email address</label>
              <input type="text" name="email" class="form-control" placeholder="Enter your email address">
            </div>
            <div class="mb-4">
              <label class="form-label d-flex justify-content-between">Password <a href="">Forgot password?</a></label>
              <input type="password" name="password" class="form-control" placeholder="Enter your password">
            </div>
            <button class="btn btn-primary btn-sign">Sign In</button>
        </form>
            <div class="divider"><span>or sign in with</span></div>

            <div class="row gx-2">
              <div class="col"><button class="btn btn-facebook"><i class="ri-facebook-fill"></i> Facebook</button></div>
              <div class="col"><button class="btn btn-google"><i class="ri-google-fill"></i> Google</button></div>
            </div><!-- row -->
          </div><!-- card-body -->
          <div class="card-footer">
            Don't have an account? <a href="sign-up-2.html">Create an Account</a>
          </div><!-- card-footer -->
        </div><!-- card -->
      </div><!-- col -->
      <div class="col d-none d-lg-block"><img src="https://via.placeholder.com/1280x640/4c5366/fff" class="auth-img" alt=""></div>
    </div><!-- row -->

    <script src="../lib/jquery/jquery.min.js"></script>
    <script src="../lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script>
      'use script'

      var skinMode = localStorage.getItem('skin-mode');
      if(skinMode) {
        $('html').attr('data-skin', 'dark');
      }
    </script>
  </body>
</html>
