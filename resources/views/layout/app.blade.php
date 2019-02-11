<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>My Website</title>
  <!-- Bootstrap core CSS-->
  <link href="/website1/vendor1/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="/website1/vendor1/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <!-- Custom styles for this template-->
  <link href="/website1/css/sb-admin.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" />
 
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top" >

  
  <div class="contents">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand disabled " style="color: white" >My website</a>
@guest
     @else<a class="navbar-brand"  href="#">
            &lt;/ {{ Auth::user()->name }}
          &gt;
        </a>
        @endguest
    <button class="navbar-toggler navbar-toggler-right pull-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        @guest
        @else
        <li class="nav-item @yield('home') " data-toggle="tooltip" data-placement="right" title="home">
          <a class="nav-link" href="@yield('homelink')/home">
            <i class="fa fa-fw fa-home"></i>
            <span class="nav-link-text "> Home</span>
          </a>
        </li>

        
        @endguest
        @section('navbar')
        
        
       
        @show()
        <li class="nav-item @yield('about')" style="@yield('aboutcss')" data-toggle="tooltip" data-placement="right" title="about">
          <a class="nav-link" href="/website1/about">
            <i class="fa fa-fw fa-user"></i>
            <span class="nav-link-text">About</span>
          </a>
        </li>

         
        
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
         @guest
        <li class="nav-item @yield('login') ">
          <a class="nav-link" href="{{ route('login') }}">Login</a></li>
         <li class="nav-item @yield('register') ">
          <a class="nav-link" href="{{ route('register') }}">Register</a>
        </li>

         @else
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle mr-lg-2" id="alertsDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-fw fa-bell"></i>
            
            <span class="d-lg-none">Notify's
              @if(0)
              <span class="badge badge-pill badge-warning">no New</span>
              @endif
            </span>
            @if(0)
            <span class="indicator text-warning d-none d-lg-block">
              <i class="fa fa-fw fa-circle"></i>
            </span>
            @endif
          </a>
          <div class="dropdown-menu" aria-labelledby="alertsDropdown">
            <h6 class="dropdown-header">New Alerts:</h6>
            <div class="dropdown-divider"></div>
           
              
            <div class="dropdown-divider"></div>
            <a class="dropdown-item small" href="#">View all alerts</a>
          </div>
        </li>
       
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
        @endguest
      </ul>
    </div>
  </nav>
  <div class="content-wrapper">
      <!-- Breadcrumbs-->
    
    @section('body')

    @show()
    
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
          </div>
        </div>
      </div>
    </div>
    <footer class="sticky-footer" style="margin-bottom:0px">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Your Website 2017</small>
        </div>
      </div>
    </footer>
    <!-- Bootstrap core JavaScript-->

    <script src="/website1/vendor1/jquery/jquery.min.js"></script>
    <script src="/website1/vendor1/popper/popper.min.js"></script>
    <script src="/website1/vendor1/bootstrap/js/bootstrap.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="/website1/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <!-- Custom scripts for all pages-->
    <script src="/website1/js/sb-admin.js"></script>
    <!-- Custom scripts for this page-->
  </div>
</div>
</body>

</html>