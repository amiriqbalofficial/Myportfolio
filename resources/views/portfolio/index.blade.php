@extends('layouts/theme')
@section('heading')
<body >
<div id="wrapper">
	<div class="preloader">
    	<div class="preloader-bounce">
            <span></span>
			<span></span>
			<span></span>
        </div>
        <h3>Amir Iqbal</h3>
    </div>


	<!--MAIN SECTION START-->
		<!--HEADER START-->

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
						    <li><a href="#6">Contact</a></li>
							</ul><!--/.navigation-menu-->
						</div><!--/.nav-box-->
					</nav><!--/#navigation-->
				</div><!--/.navigation-row-->
				<!-- Contact me  -->

				<!-- <img src="images/contact.png" width="50px;" style="margin-top:130px;">  -->
			</div><!--/.navbar-->
		</div><!--/.container-->
	</header><!--/#header-->
	<!--HEADER END-->
	<div class="main-container">
		<div class="section animated-row" id="1">
		<div class="fp-bg-img" style="background-image:url(images/aamir15.jpg);"></div>
			<div class="section-inner">
				<div class="welcome-box">
					<span class="introduction"><span style="color: orange;">Hello</span> ! My name is Amir Iqbal.</span><br>
					<span class="intro-1">By Profession, <br>I am <span class=" intro-2"></span></span>
					<p class="animate" data-animate="fadeInUp">I am profesional web developer/ designer with three years expieriance in the Web Programming tools and languages .</p>
					<a href="{{route('resume')}}"><span class="btn next-section animate" data-animate="fadeInUp">View My Resume</span></a>

				</div><!--/.welcome-box-->
			</div><!--/.section-inner-->
		</div><!--/.section-->

		<div class="section animated-row" id="2">
		<div class="fp-bg-img" style="background-image:url(images/slide-bg-02.jpg)"></div>
			<div class="section-inner">
				<div class="about-section">
					<div class="row justify-content-center">
						<div class="col-lg-8 wide-col-laptop">
							<div class="row">
								<div class="col-md-6">
									<figure class="about-img animate" data-animate="fadeInUp"><img src="images/aamirp.jpg" alt=""></figure>
								</div>
								<div class="col-md-6">
									<div class="about-contentbox">
										<div class="animate" data-animate="fadeInUp">
											<h2>About me</h2>
											<p> I am a professional web developer / designer & a trainer with four years experience in the Web Programming tools and languages. (ALHAMDULILLAH)
                                            I always learn new things when it comes to web. My passion is to make awesome websites for my clients, fix their problems & satisfy them by providing all of my knowledge & abilities.
                                            My Skills and Expertise are mention below. Feel free to check out my work or view my resume. I am available to be hired. If I should fit for your work, don't hesitate to contact!</p>
										</div>

									</div><!--/.about-contentbox-->
								</div>
							</div><!--/.row-->
						</div>
					</div><!--/.row-->
				</div><!--/.about-section-->
			</div><!--/.section-inner-->
		</div><!--/.section-->
		<div class="section animated-row" id="3">
			<div class="fp-bg-img" style="background-image:url(images/aamir3.jpg)"></div>
			<div class="section-inner">
				<div class="row justify-content-center">
					<div class="col-md-7 wide-col-laptop">
						<div class="title-block animate" data-animate="fadeInUp">
							<h2>My Skills</h2>
							<p>This is what I meant for. As I recognise my inner talents, develop them into skills and uses them to accomplish my goals..</p>
						</div><!--/.title-block-->
						<div class="skills-row" >
							<div class="row" >
								<div class="col-lg-6">
									<div class="skill-bar">
										<strong class="skill-label" >HTML</strong>
										<div class="progress-bar-value"><span class="progress-value" style="width:85%"><em>85%</em></span></div>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="skill-bar">
										<strong class="skill-label">CSS</strong>
										<div class="progress-bar-value"><span class="progress-value" style="width:85%"><em>85%</em></span></div>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="skill-bar">
										<strong class="skill-label">WEB DEVELOPMENT</strong>
										<div class="progress-bar-value"><span class="progress-value" style="width:85%"><em>85%</em></span></div>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="skill-bar">
										<strong class="skill-label">DESIGN</strong>
										<div class="progress-bar-value"><span class="progress-value" style="width:95%"><em>95%</em></span></div>
									</div>
								</div>

								<div class="col-lg-6">
									<div class="skill-bar">
										<strong class="skill-label">PHP</strong>
										<div class="progress-bar-value"><span class="progress-value" style="width:75%"><em>75%</em></span></div>
									</div>
								</div>

								<div class="col-lg-6">
									<div class="skill-bar">
										<strong class="skill-label">LARAVEL</strong>
										<div class="progress-bar-value"><span class="progress-value" style="width:85%"><em>85%</em></span></div>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="skill-bar">
										<strong class="skill-label">JAVASCRIPT</strong>
										<div class="progress-bar-value"><span class="progress-value" style="width:75%"><em>70%</em></span></div>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="skill-bar">
										<strong class="skill-label">JQUERY</strong>
										<div class="progress-bar-value"><span class="progress-value" style="width:75%"><em>75%</em></span></div>
									</div>
								</div>
							</div><!--/.row-->
						</div><!--/.skills-row-->
					</div>
				</div>
			</div><!--/.section-inner-->
		</div><!--/.section-->
		<div class="section animated-row" id="4">

			<div class="section-inner">
				<div class="row justify-content-center">
					<div class="col-md-8 wide-col-laptop">
						<div class="title-block animate" data-animate="fadeInUp">
							<h2>Services I Offer</h2>
							<p>Services provided to my clients. As I love my work and I love my clients to provide them absolutely outstanding services. </p>
						</div><!--/.title-block-->
						<div class="services-section">
							<div class="services-list owl-carousel">
								<div class="item animate" data-animate="fadeInUp">
									<div class="service-box">
										<span class="service-icon"><i class="fas fa-laptop-code" aria-hidden="true"></i></span>

										<h3>Front-end Design</h3>
										<p>Create an awesome website design and also edit a pre-exisiting design of a website. Every design will be created with best features using latest technologies available.</p>
									</div><!--/.service-box-->
								</div><!--/.item-->
								<div class="item animate" data-animate="fadeInUp">
									<div class="service-box">
										<span class="service-icon"><i class="fas fa-code" aria-hidden="true"></i></span>
										<h3>Back-end Development</h3>
										<p>Built and develop custom web applications that can be able to handle high traffic. Can develop and maintain the core functional logic & operations of the web application system.</p>
									</div>
								</div><!--/.item-->
								<div class="item animate" data-animate="fadeInUp">
									<div class="service-box">
										<span class="service-icon"><i class="fas fa-mobile-alt" aria-hidden="true"></i></span>
										<h3>Responsive Layouts</h3>
										<p>Dealing with the cross browsers compatibility. Web designs that is workable on all types of devices and screen resolutions. Such as Desktops, Laptops, Tablet & Mobile phones.</p>
									</div>
								</div><!--/.item-->

								<!--/.item-->
								<!--/.item-->
							</div><!--/.services-list-->
						</div><!--/.services-section-->
					</div>
				</div>
			</div><!--/.section-inner-->
		</div><!--/.section-->
		<div class="section animated-row" id="5">
		<div class="fp-bg-img" style="background-image:url(images/slide-bg-05.jpg)"></div>
			<div class="section-inner">
				<div class="row justify-content-center">
					<div class="col-md-8 wide-col-laptop">
						<div class="title-block animate" data-animate="fadeInUp">
							<h2>Testimonials</h2>
							<p>A good, sympathetic review is always a wonderful surprise..</p>
						</div><!--/.title-block-->
						<div class="testimonials-section">
							<div class="testimonials-slider owl-carousel">
								<div class="item animate" data-animate="fadeInUp">
									<div class="testimonial-item">
										<div class="testimonial-content">
											<p>HEllo</p>
										</div><!--/.testimonial-content-->
										<div class="client-row">
											<figure class="client-img"><img src="images/aamirp.jpg" alt=""></figure>
											<div class="client-info">
												<span class="client-name">Maria wilson</span>
												Creative Head, ACD fitness
											</div><!--/.client-info-->
										</div><!--/.client-row-->
									</div><!--/.testimonial-item-->
								</div><!--/.item-->

							</div><!--/.testimonials-slider-->
						</div><!--/.testimonials-section-->
					</div>
				</div>
			</div><!--/.section-inner-->
		</div><!--/.section-->

		<div class="section animated-row" id="7">
		<div class="fp-bg-img" style="background-image:url(images/aamir17.jpg)"></div>
			<div class="section-inner">
				<div class="row justify-content-center">
					<div class="col-md-7 wide-col-laptop">
						<div class="title-block animate" data-animate="fadeInUp">
							<h2>Contact me</h2>
							<p>I am Amir Iqbal ,will always be available for you whenever you need my services for the purpose of<br><span style="color:orange;">WEB DEVELOPMENT.</span></p>
						</div><!--/.title-block-->
						@if (session('success_message'))
    <div class="alert alert-success">
        {{ session('success_message') }}
    </div>
@endif
						<div class="contact-section">
							<div class="row">
								<div class="col-md-6 animate" data-animate="fadeInUp">
									<div class="">
            @if(count($errors)>0))
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>

                    @endforeach
                </ul>

            @endif
        </div>
										@if(session('message'))
	                                    {{session('message')}}
	                                    @endif
									<form  method="post" action="portfolio">
										@csrf
										<div class="input-field">
											<input type="text" class="form-control" name="name" placeholder="Name" id="name">

										</div><!--/.input-field-->
										<div class="input-field">
											<input type="email" class="form-control" name="email" placeholder="Email" id="email">

										</div><!--/.input-field-->
										<div class="input-field">
										<textarea class="form-control" name="message" placeholder="Comment" id="comment"></textarea>

									</div><!--/.input-field-->
									<input type="submit" value="submitt" name="submit" class="btn btn-success submit" id="button" >
									</form>
									<div id="form-messages" class="mt-3"></div>
								</div>
								<div class="col-md-6 animate" data-animate="fadeInUp">
									<div class="contact-box">
										<h4>Connect with me</h4>
										<div class="contact-row">
											<i class="fa fa-map-marker"></i>29 pond st, waltham , MA
										</div><!--/.contact-row-->
										<div class="contact-row">
											<i class="fa fa-phone"></i>+1 617 467-7185
										</div><!--/.contact-row-->
										<div class="contact-row">
											<i class="fa fa-envelope"></i>Aamiriqbalofficial@gmail.com
										</div><!--/.contact-row-->
									</div><!--/.contact-box-->
								</div>
							</div>
						</div><!--/.contact-section-->
					</div>
				</div>
			</div><!--/.section-inner-->
		</div><!--/.section-->
	</div><!--/#main-->
	<!--MAIN SECTION END-->

@include('sweetalert::alert')
	<!--FOOTER START-->
	<footer id="footer">
		<div class="container-fluid">
			<div class="footer-row">
				<!--/.social-icons-->

				<div class="footer-right">
					&copy; 2020 Amir Iqbal. All Rights Reserved
				</div><!--/.footer-right-->
			</div><!--/.footer-row-->
		</div><!--/.container-->
	</footer><!--#/footer-->
	<!--FOOTER END-->
</div>
<!--/#wrapper-->
<script src="js/jquery.js"></script>
<!-- Latest jQuery Library File -->
<script src="js/bootstrap.min.js"></script>
<!-- Latest Bootstrap -->
<script src="js/scroll.js"></script>
<script src="js/owl.carousel.min.js"></script>
<!-- slider js -->
<script src="js/jquery.inview.min.js"></script>
<script src="js/form.js"></script>
<!-- Contact js -->
<script src="js/general-scripts.js"></script>
<!-- Main Script -->
<script >
      document.addEventListener('contextmenu', event => event.preventDefault(Swal.fire({
  type: 'error',
  text: 'Right button is disabled on my website !',

  backdrop:'rgba(0,0,123,0.4)',
  animation: false,
  customClass: {
    popup: 'animated tada'
  }
})));


    </script>


<script type="text/JAVASCRIPT">
	var typed = new Typed('.intro-2', {
  strings: ["Full Stack Developer.", "Front-end Developer.","Back-end Developer."],
  typeSpeed: 30,
  backSpeed: 40,
  backDelay: 1000,
  loop:true
});
</script>

<script type="text/JAVASCRIPT">
	$(document).ready(function(){
		$('#name').click(function(){
			var typed4 = new Typed('#name', {
    strings: ['Some strings without', 'Please Enter Your Name', 'E.g. Amir Iqbal'],
    typeSpeed: 40,
    backSpeed: 50,
    attr: 'placeholder',
    bindInputFocusEvents: true,
    loop: false
  });
		})
	})

	$(document).ready(function(){
		$('#email').click(function(){
			var typed4 = new Typed('#email', {
    strings: ['Some strings without', 'Please Enter Your Email', 'E.g. Aamiriqbalofficial@gmail.com'],
    typeSpeed: 40,
    backSpeed: 50,
    attr: 'placeholder',
    bindInputFocusEvents: true,
    loop: false
  });
		})
	})

	$(document).ready(function(){
		$('#comment').click(function(){
			var typed4 = new Typed('#comment', {
    strings: ['Some strings without', 'Write Your Valueable Comment', 'Feel Free To Ask AnyThing'],
    typeSpeed: 40,
    backSpeed: 50,
    cursorChar: '',
    attr: 'placeholder',
    bindInputFocusEvents: true,
    loop: false
  });
		})
	})

</script>


</body>

<!-- Mirrored from litmusthemes.com/themes/octagon/index-backgrounds.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Oct 2019 19:13:59 GMT -->
</html>
@endsection
