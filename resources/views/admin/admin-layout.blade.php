<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <!DOCTYPE html>
    <html lang="en">

    <!-- Mirrored from thememinister.com/crm/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 02 Jun 2019 11:06:57 GMT -->
    <head>
          <meta charset="utf-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <title>Portfolio|Admin</title>
          <!-- Favicon and touch icons -->
          @include('admin.admin-links')

       </head>
       <body class="hold-transition sidebar-mini">
          <!--preloader-->

          <!-- Site wrapper -->
          <div class="wrapper">
             <header class="main-header">
                <a href="index.html" class="logo">
                   <!-- Logo -->
                   <span class="logo-mini">
                   <img src="admin-assets/dist/img/mini-logo.png" alt="">
                   </span>
                   <span class="logo-lg">
                   <img src="assets/dist/img/logo.png" alt="">
                   </span>
                </a>
                <!-- Header Navbar -->
                <nav class="navbar navbar-static-top">
                   <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                      <!-- Sidebar toggle button-->
                      <span class="sr-only">Toggle navigation</span>
                      <span class="pe-7s-angle-left-circle"></span>
                   </a>
                   <!-- searchbar-->

                 <div class="navbar-custom-menu">
                      <ul class="nav navbar-nav">
                         <!-- Orders -->


                         <li class="dropdown dropdown-user">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="assets/dist/img/avatar5.png" class="img-circle" width="45" height="45" alt="user"></a>
                            <ul class="dropdown-menu" >
                               <li>
                                  <a href="profile.html">
                                  <i class="fa fa-user"></i> User Profile</a>
                               </li>
                               <li><a href="#"><i class="fa fa-inbox"></i> Inbox</a></li>
                               <li><a href="login.html">
                                  <i class="fa fa-sign-out"></i> Signout</a>
                               </li>
                            </ul>
                         </li>
                      </ul>
                   </div>
                </nav>
             </header>
    @yield('header')
  </head>
  <body>
@yield('content')
<aside class="main-sidebar">
   <!-- sidebar -->
   <div class="sidebar">
      <!-- sidebar menu -->
      <ul class="sidebar-menu">
         <li class="active">
            <a href="index.html"><i class="fa fa-tachometer"></i><span>Dashboard</span>
            <span class="pull-right-container">
            </span>
            </a>
         </li>

         <li class="treeview">
            <a href="#">
            <i class="fa fa-users"></i><span>skills</span>
            <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">
               <li><a href="{{route('add-skills')}}">Add skills</a></li>

            </ul>
         </li>
         <li class="treeview">
            <a href="#">
            <i class="fa fa-users"></i><span>Testimonials</span>
            <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">
               <li><a href="add-customer.html">Add Testimonials</a></li>

            </ul>
         </li>

         <li class="treeview">
            <a href="#">
            <i class="fa fa-users"></i><span>Services</span>
            <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">
               <li><a href="add-customer.html">Add Services</a></li>

            </ul>
         </li>


   <!-- /.sidebar -->
</aside>
@yield('sidebar')
<footer class="main-footer">
   <strong>Copyright &copy; 2020 <a href="#">Aamir|Admin</a>.</strong> All rights reserved.
</footer>
@yield('footer')
  </body>
</html>
