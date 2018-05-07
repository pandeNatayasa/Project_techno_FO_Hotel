<!DOCTYPE html>
<html>
<head>
	<title>Admin Login | Front Office</title>
    <!--import link icon-->
    <link rel="icon" href="material/images/logo-32x32.png">
	<!--Import Google Icon Font-->
	<!--link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"-->
	<link href="material/material-design-icons/css/material-icons.css" rel="stylesheet">
	<!--Import materialize.css-->
	<link type="text/css" rel="stylesheet" href="material/materialize/css/materialize.min.css"  media="screen,projection"/>
	<link type="text/css" rel="stylesheet" href="material/materialize/css/style.css"  media="screen,projection"/>
	<link type="text/css" rel="stylesheet" href="material/materialize/css/myStyle.css"  media="screen,projection"/>
	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!--Import Page Loader-->
    <link rel="stylesheet" type="text/css" href="material/pageloader/css/main.css">
    <script src="material/pageloader/js/vendor/modernizr-2.6.2.min.js"></script>
</head>
<body>

    <!--Start Page Loader-->
    <!-- <div id="loader-wrapper">
        <div id="loader"></div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div> -->
    <!--Start Page Loader-->
    <!--//////////////////////////////////////////////////////////////////////-->

	<!--Start Header-->
    <header id="header">
		<div class="navbar-fixed">
			<nav class="nav-background">
				<div class="nav-wrapper">
					<a href="" class="brand-logo"><img class="margin-on-med-and-down" src="material/images/logo-nav.png" style="padding-left:10px"></a>
					<a href="#" data-activates="dropdown1" class="btn-floating btn-large hide-on-large-only side-nav-background"><i class="material-icons">menu</i></a>
      				<ul class="right hide-on-med-and-down">
                        <li><a class="black-text" href="#contact">Contact</a></li>
				        <li><a class="black-text" href="#our-team">Our Team</a></li>
				    </ul>
      				<ul id="dropdown1" class="dropdown-content side-nav-background col s12">
                        <li><a class="white-text" href="#contact">Contact</a></li>
                        <li><a class="white-text" href="#our-team">Our Team</a></li>
                    </ul>
				</div>
			</nav>
		</div>
	</header>
    <!--End Header-->
    <!--//////////////////////////////////////////////////////////////////////-->

	<!--Start Main Content-->
    <div id="main">

		<!-- Start Login Form -->
        <div class="container" style="padding-top:60px">
            <div class="row">
                <div class="col m6 left-shadow hide-on-med-and-down">
                    <div class="col s12 center">
                        <img class="responsive-img" src="material/images/logo-index.png">
                        <h4 class="center header-text-color">WELCOME TO SURYA INN FRONT OFFICE</h4>
                    </div>
                </div>
                <div class="col m6 display-on-med">
                    <div class="row">
                        <form class="col s12" method="post" action="loginAdmin">
                        {{csrf_field()}}
                            <div class="row center">
                                <div class="input-field col s12 center">
                                     <img class="circle responsive-img valign profile-image-login" src="material/images/surya-inn.jpg" style="width:90px;height:90px">
                                     <p class="center login-form-text header-text-color">SURYA INN ADMIN LOGIN</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
							        <i class="material-icons prefix">person_outline</i>
							        <input name="username" id="username" type="text" class="validate">
							        <label for="username">User Name</label>
                                    <span class="red-text" for="username">
                                        
                                    </span>
                                    
        						</div>
                            </div>
                            <div class="row">
                            	<div class="input-field col s12">
							        <i class="material-icons prefix">lock_outline</i>
							        <input name="password" id="password" type="password" class="validate">
							        <label for="password">Password</label>
                                    <span class="red-text" for="password">
                                        
                                    </span>
                                    
        						</div>
                            </div>
                            <div class="row">
                            	<div class="input-field col s6 l6 m6">
                            		<a class="black-text" href="reset-password.html">Forgot Password?</a>
                            	</div>
                            	<div class="input-field right-align col s6 l6 m6">
                            		<button class="waves-effect waves-light btn side-nav-background">Login</button>
                            	</div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Login Form-->
        <!--//////////////////////////////////////////////////////////////////////-->

        <!--Start Parallax 1-->
        <div class="parallax-container">
            <div class="parallax"><img src="material/images/1.jpg"></div>
        </div>
        <!--End Parallax 1-->
        <!--//////////////////////////////////////////////////////////////////////-->

        <!-- Start Our Team-->
        <div class="container" style="padding-top:40px;padding-bottom:40px;" id="our-team">
            <h2 class="center header-text-color">Our Team</h2>
            <p class="center">Surya Inn Front Office</p>
            <p class="justify">Surya Inn Front Office merupakan website yang memberikan informasi seputar hotel Surya Inn, khususnya bagian front office. Surya Inn Front Office menyediakan beberapa fitur diantaranya fitur untuk menampilkan keseluruhan data terkait hotel, selain itu Surya Inn Front Office, juga menyediakan fitur untuk melakukan check in dan check out untuk customer, fitur untuk room reservation, dan fitur room service. Surya Inn Front Office dibangun oleh enam orang mahasiswa. Berikut merupakan enam orang mahasiswa yang membangun Surya Inn Front Office</p>
            <div class="row">
                <div class="col l4">
                    <div class="col s12 center">
                        <p class="black-text">Back End Development</p>
                        <img class="circle responsive-img" src="material/images/surya-inn.jpg" style="width:90px;height:90px">
                        <p class="black-text">Nata</p>
                    </div>
                </div>
                <div class="col l4">
                    <div class="col s12 center">
                        <p class="black-text">Back End Development</p>
                        <img class="circle responsive-img" src="material/images/surya-inn.jpg" style="width:90px;height:90px">
                        <p class="black-text">Nata</p>
                    </div>
                </div>
                <div class="col l4">
                    <div class="col s12 center">
                        <p class="black-text">Back End Development</p>
                        <img class="circle responsive-img" src="material/images/surya-inn.jpg" style="width:90px;height:90px">
                        <p class="black-text">Nata</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col l4">
                    <div class="col s12 center">
                        <p class="black-text">Back End Development</p>
                        <img class="circle responsive-img" src="material/images/surya-inn.jpg" style="width:90px;height:90px">
                        <p class="black-text">Nata</p>
                    </div>
                </div>
                <div class="col l4">
                    <div class="col s12 center">
                        <p class="black-text">Back End Development</p>
                        <img class="circle responsive-img" src="material/images/surya-inn.jpg" style="width:90px;height:90px">
                        <p class="black-text">Nata</p>
                    </div>
                </div>
                <div class="col l4">
                    <div class="col s12 center">
                        <p class="black-text">Back End Development</p>
                        <img class="circle responsive-img" src="material/images/surya-inn.jpg" style="width:90px;height:90px">
                        <p class="black-text">Nata</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Our Team-->
        <!--//////////////////////////////////////////////////////////////////////-->

        <!--Start Parallax 2-->
        <div class="parallax-container">
            <div class="parallax"><img src="material/images/2.jpg"></div>
        </div>
        <!--End Parallax 2-->
        <!--//////////////////////////////////////////////////////////////////////-->

	</div>
    <!--End Main Content-->
    <!--//////////////////////////////////////////////////////////////////////-->

    <!--Start Footer-->
    <footer class="page-footer nav-background">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="black-text">Surya Inn Hotel</h5>
                    <div class="divider-form"></div>
                    <p class="black-text">Dewi Sartika Street, Gg. Nusa Indah, No.30 Kuta-Bali </p>
                </div>
                <div class="col l4 offset-l2 s12" id="contact">
                    <h5 class="black-text">Our Contact</h5>
                    <div class="divider-form"></div>
                    <pre class="black-text">Phone      : +62361 4752252</pre>
                    <pre class="black-text">                    +6281 557 125 54</pre>
                    <pre class="black-text">                    +6281 558 022 020</pre>
                    <pre class="black-text">E-mail      : suryainnbali@yahoo.com</pre>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                <a class="black-text left" href="">Copyright 2017 Surya Inn Hotel</a> 
                <a class="black-text right" href="">Front Office</a>
            </div>
        </div>
    </footer>
    <!--End Footer-->
    <!--//////////////////////////////////////////////////////////////////////-->
    
	<!--Script-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="material/materialize/js/materialize.min.js"></script>
	<script type="text/javascript">
    	// Initialize collapse button
  		$(".btn-floating").dropdown();
  		// Initialize collapsible (uncomment the line below if you use the dropdown variation)
 		//$('.collapsible').collapsible();
        $(document).ready(function(){
            $('.parallax').parallax();
        });
    </script>
    <script src="material/pageloader/js/main.js"></script>
    <!--//////////////////////////////////////////////////////////////////////-->

</body>
</html>