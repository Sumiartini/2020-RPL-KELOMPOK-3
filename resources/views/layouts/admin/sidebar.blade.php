<style>
  img {
    width: 40px;
    height: 40px;
    border-radius: 50%;
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
        <a href="index.html" class="waves-effect">
          <i class="fa fa-cog"></i> <span>Home</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
          <li><a href="{{URL::to('Students')}}"><i class="fa fa-circle-o"></i>Student Management</a></li>
          <li><a href="{{URL::to('Students')}}"><i class="fa fa-circle-o"></i>Attendance List</a></li>
          <li><a href="{{URL::to('Student')}}"><i class="fa fa-circle-o"></i>Report</a></li>
        </ul>
      </li>
      
      
      <li>
        <form method="post" action="{{Route('logout')}}">
        @csrf
           <button type="submit" class="btn btn-sm btn-danger btn-block waves-effect waves-light icon-power mr-2">Logout</button>
      </form>
      </li>
   </div>


   <!--End sidebar-wrapper-->