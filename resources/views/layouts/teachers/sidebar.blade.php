<style>
  img {
    width: 40px;
    height: 40px;
    border-radius: 50%;
  }
    .btn-circle {
      border-radius: 100%;
  }
</style>
<div id="wrapper">
 
  <!--Start sidebar-wrapper-->
   <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
     <div class="brand-logo">
      <a href="index.html">
       <img src="{{URL::to('assets/images/mahaputra.JFIF')}}" class="logo-icon" alt="logo icon">
       <h5 class="logo-text">SmkMahaputra</h5>
     </a>
   </div>


   <ul class="sidebar-menu do-nicescrol">
      <li class="sidebar-header"></li>
      
      <li>
        <a href="#" class="waves-effect">
          <i class=""></i> <span>List of Student</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
    <ul class="sidebar-submenu">
          <li><a href="{{URL::to('/teachers/listofStudents')}}"><i class="fa fa-circle-o"></i>XII RPL</a></li>
        </ul>
      </li>

      <li>
        <a href="{{ route('logout') }}" onclick="event.preventDefault();
         document.getElementById('logout-form').submit();"><i class="icon-logout icons"></i>  Logout</a>
         <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
      </li>
    
    </ul>
   
   </div>

   



