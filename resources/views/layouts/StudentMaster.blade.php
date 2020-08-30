
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from codervent.com/rocker/color-version/pages-blank-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 Nov 2019 12:20:59 GMT -->
@include ('layouts.students.head')
<body>
<div id="wrapper">
<!-- Start wrapper-->


<!--Start topbar header-->
@include ('layouts.students.header')
<!--End topbar header-->
<li><li><li>
<div class="clearfix"></div>

 
    <div class="container-fluid">

      <div class="row">
        <div class="col-lg-12">
		      @yield('content')
        </div>
      </div>

    </div>
    <!-- End container-fluid-->
    
 <!--End content-wrapper-->
   <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
	
	<!--Start footer-->
	</li></li></li>
	<!--End footer-->
   
  </div><!--End wrapper-->

@include('sweetalert::alert')
  <!-- Bootstrap core JavaScript-->
 @include ('layouts.students.js')</body>

<!-- Mirrored from codervent.com/rocker/color-version/pages-blank-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 Nov 2019 12:20:59 GMT -->
</html>
