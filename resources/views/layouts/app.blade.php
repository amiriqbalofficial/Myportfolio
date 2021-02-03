<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
  </head>
  <body>
    @yield('header')
    <header id="header">
      <div class="container-fluid">
        <div class="navbar">
          <a href="" id="logo" title="Octagon">
            <img src="images/logo.png" alt="Aamir" >
          </a>

          <div class="navigation-row">
            <nav id="navigation">
              <button type="button" class="navbar-toggle"> <i class="fa fa-bars"></i> </button>
              <div class="nav-box navbar-collapse">
                <ul class="navigation-menu nav navbar-nav navbars" id="nav">
                  <li><a href="#1">Home</a></li>
                  <li><a href="#2">About</a></li>
                  <li><a href="#3">Skills</a></li>
                  <li><a href="#4">Services</a></li>
                  <li><a href="#5">Testimonials</a></li>
                  <li><a href="#6">Work</a></li>
                  <li><a href="#7">Contact</a></li>
                </ul><!--/.navigation-menu-->
              </div><!--/.nav-box-->
            </nav><!--/#navigation-->
          </div><!--/.navigation-row-->
          <!-- Contact me  -->

          <!-- <img src="images/contact.png" width="50px;" style="margin-top:130px;">  -->
        </div><!--/.navbar-->
      </div><!--/.container-->
    </header><!--/#header-->
<div class="container">
  <div class="row">
    <div class="col-lg-12">
      @yield('content')
    </div>
  </div>
</div>
  </body>
</html>
