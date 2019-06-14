
<!DOCTYPE html>
<html lang="en" data-textdirection="LTR" class="loading">
  
<!-- Mirrored from pixinvent.com/bootstrap-admin-template/robust/html/ltr/vertical-menu-template/register-advanced.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Feb 2018 17:19:09 GMT -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Robust admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, robust admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Login | Admin Panel </title>
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/bootstrap.min.css')}}">
    <!-- font icons-->
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/fonts/icomoon.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/fonts/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/sliders/slick/slick.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/extensions/pace.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/forms/icheck/icheck.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/forms/icheck/custom.css')}}">
    <!-- END VENDOR CSS-->
    <!-- BEGIN ROBUST CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/bootstrap-extended.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/app.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/colors.min.css')}}">
    <link rel="stylesheet" type="text/css" href="../../../assets/css/style.css')}}">
    <!-- END ROBUST CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/core/menu/menu-types/vertical-menu.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/core/menu/menu-types/vertical-overlay-menu.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/pages/login-register.min.css')}}">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
    <!-- END Custom CSS-->
  </head>
  <body data-open="click" data-menu="vertical-menu" data-col="1-column" class="vertical-layout vertical-menu 1-column bg-cyan bg-lighten-2 fixed-navbar">

    
    <!-- ////////////////////////////////////////////////////////////////////////////-->
    <div class="app-content content container-fluid">
      <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <section class="col-md-4 offset-md-4 col-xs-8 offset-xs-2  box-shadow-2 p-0">
    <div class="card border-grey border-lighten-3 px-2 py-2 row mb-0">
        <div class="card-header no-border pb-0">
            <div class="card-title text-xs-center">
                <img src="{{asset('theme/images/logo.png')}}" alt="logo">
            </div>
            <h6 class="card-subtitle line-on-side text-muted text-xs-center font-small-3 pt-2"><span>Unlock your account</span></h6>
        </div>
        <div class="card-body collapse in">
                <div class="card-block">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                         @csrf
                        <fieldset class="form-group position-relative has-icon-left">
                            <input type="password" class="form-control form-control-lg input-lg" id="password" placeholder="Enter Password" name="password" required>
                            <div class="form-control-position">
                                <i class="icon-key3"></i>
                            </div>
                        </fieldset>
                        <button type="submit" class="btn btn-primary btn-lg btn-block"><i class="icon-lock4"></i> Unlock</button>
                    </form><br>
                        <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" class="btn btn-danger btn-lg btn-block"><i class="icon-power3"></i> Logout</a>
                              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>                       
                    
                </div>
            </div>
    </div>
</section>
        </div>
      </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->


  

    <!-- BEGIN VENDOR js')}}"-->
    <!-- build:js')}}" app-assets/js')}}"/vendors.min.js')}}"-->
    <script src="{{asset('app-assets/js')}}"/core/libraries/jquery.min.js')}}"" type="text/javascript"></script>
    <script src="{{asset('app-assets/vendors/js')}}"/ui/tether.min.js')}}"" type="text/javascript"></script>
    <script src="{{asset('app-assets/js')}}"/core/libraries/bootstrap.min.js')}}"" type="text/javascript"></script>
    <script src="{{asset('app-assets/vendors/js')}}"/ui/perfect-scrollbar.jquery.min.js')}}"" type="text/javascript"></script>
    <script src="{{asset('app-assets/vendors/js')}}"/ui/unison.min.js')}}"" type="text/javascript"></script>
    <script src="{{asset('app-assets/vendors/js')}}"/ui/blockUI.min.js')}}"" type="text/javascript"></script>
    <script src="{{asset('app-assets/vendors/js')}}"/ui/jquery.matchHeight-min.js')}}"" type="text/javascript"></script>
    <script src="{{asset('app-assets/vendors/js')}}"/ui/jquery-sliding-menu.js')}}"" type="text/javascript"></script>
    <script src="{{asset('app-assets/vendors/js')}}"/sliders/slick/slick.min.js')}}"" type="text/javascript"></script>
    <script src="{{asset('app-assets/vendors/js')}}"/ui/screenfull.min.js')}}"" type="text/javascript"></script>
    <script src="{{asset('app-assets/vendors/js')}}"/extensions/pace.min.js')}}"" type="text/javascript"></script>
    <!-- /build-->
    <!-- BEGIN VENDOR js')}}"-->
    <!-- BEGIN PAGE VENDOR js')}}"-->
    <script src="{{asset('app-assets/vendors/js')}}"/forms/validation/jqBootstrapValidation.js')}}"" type="text/javascript"></script>
    <script src="{{asset('app-assets/vendors/js')}}"/forms/icheck/icheck.min.js')}}"" type="text/javascript"></script>
    <!-- END PAGE VENDOR js')}}"-->
    <!-- BEGIN ROBUST js')}}"-->
    <!-- build:js')}}" app-assets/js')}}"/app.min.js')}}"-->
    <script src="{{asset('app-assets/js')}}"/core/app-menu.min.js')}}"" type="text/javascript"></script>
    <script src="{{asset('app-assets/js')}}"/core/app.min.js')}}"" type="text/javascript"></script>
    <script src="{{asset('app-assets/js')}}"/scripts/ui/fullscreenSearch.min.js')}}"" type="text/javascript"></script>
    <!-- /build-->
    <!-- END ROBUST js')}}"-->
    <!-- BEGIN PAGE LEVEL js')}}"-->
    <script src="{{asset('app-assets/js')}}"/scripts/forms/form-login-register.min.js')}}"" type="text/javascript"></script>
    <!-- END PAGE LEVEL js')}}"-->
   
</body>

<!-- Mirrored from pixinvent.com/bootstrap-admin-template/robust/html/ltr/vertical-menu-template/register-advanced.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Feb 2018 17:19:09 GMT -->
</html>
