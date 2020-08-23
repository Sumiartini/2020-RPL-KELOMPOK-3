<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from codervent.com/rocker/color-version/pages-blank-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 Nov 2019 12:20:59 GMT -->
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>@yield('title')</title>
  <!--favicon-->
  <link rel="icon" href="{{URL::to('assets/images/mahaputra.JFIF')}}" type="image/x-icon">
  <!-- simplebar CSS-->
  <link href="{{URL::to('assets/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet"/>
  <!-- Bootstrap core CSS-->
  <link href="{{URL::to('assets/css/bootstrap.min.css')}}" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="{{URL::to('assets/css/animate.css')}}" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="{{URL::to('assets/css/icons.css')}}" rel="stylesheet" type="text/css"/>
  <!-- Sidebar CSS-->
  <link href="{{URL::to('assets/css/sidebar-menu.css')}}" rel="stylesheet"/>
  <!-- Custom Style-->
  <link href="{{URL::to('assets/css/app-style.css')}}" rel="stylesheet"/>

  
</head>

<body>


<!--Start topbar header-->
@include ('layouts.attendanceLists.header')
<!--End topbar header-->
<li>
<li>
<li>
<div class="clearfix"></div>
 
    <div class="container-fluid">

      <div class="row">
        <div class="col-lg-12">
             <!-- End Breadcrumb-->
            <div class="row">
              <div class="col-lg-12">
                <div class="card">
                   <div class="card-header"> @yield('div')</div>
                <div class="card-body">
              <div class="table-responsive">
             @yield('table')
              </div>
                </div>
                </div>
              </div>
            </div>
          </div>
        </div><!-- End Row-->

          <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
   
      </div> <!-- End container-fluid-->

</li>
</li>
</li>
@include('sweetalert::alert')
  <!-- Bootstrap core JavaScript-->
 @include ('layouts.attendanceLists.js')

</body>


</html>

