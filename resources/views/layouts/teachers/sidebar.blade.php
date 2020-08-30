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
       
      <center><p style="color:orange;">{{Auth::user()->name}}</p></center>


         <li>
        <a href="#" class="waves-effect">
          <i class="zmdi zmdi-storage"></i> <span>Daftar Kehadiran</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
          <ul class="sidebar-submenu">
            <li><a href="{{URL::to('/attendanceList')}}"><i class="fa fa-circle-o"></i>Daftar kehadiran Siswa</a></li>
          </ul>
      </li>

      <li>
        <a href="#" class="waves-effect">
          <i class="zmdi zmdi-storage"></i> <span>Daftar Kelas</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
          <ul class="sidebar-submenu">
            <li><a href="{{URL::to('/teachers/listofStudents/xiiRpl1')}}"><i class="fa fa-circle-o"></i>XII RPL1</a></li>
          </ul>
          <ul class="sidebar-submenu">
            <li><a href="{{URL::to('/teachers/listofStudents/xiiRpl2')}}"><i class="fa fa-circle-o"></i>XII RPL2</a></li>
          </ul>

          <ul class="sidebar-submenu">
            <li><a href="{{URL::to('/teachers/create')}}"><i class="icon-note"></i>tambah siswa</a></li>
          </ul>
      </li>

    
    </ul>
   
   </div>

   



