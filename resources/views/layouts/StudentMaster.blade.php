<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from codervent.com/rocker/color-version/pages-blank-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 Nov 2019 12:20:59 GMT -->
@include ('layouts.siswa.head')
<body>

<!-- Start wrapper-->
@include ('layouts.siswa.sidebar')

<!--Start topbar header-->
@include ('layouts.siswa.header')
<!--End topbar header-->

<div class="clearfix"></div>
	@include ('layouts.siswa.sidebar')
  <div class="content-wrapper">
    <div class="container-fluid">

      <div class="row">
        <div class="col-lg-12">
		      @yield('content')
        </div>
      </div>

    </div>
    <!-- End container-fluid-->
    
   </div><!--End content-wrapper-->
   <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
	
	<!--Start footer-->
	
	<!--End footer-->
   
  </div><!--End wrapper-->

@include('sweetalert::alert')
  <!-- Bootstrap core JavaScript-->
 @include ('layouts.siswa.js')</body>

<!-- Mirrored from codervent.com/rocker/color-version/pages-blank-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 Nov 2019 12:20:59 GMT -->
</html>
