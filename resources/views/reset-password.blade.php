<!DOCTYPE html>
<html>
<head>
	<title>Reset Password | Front Office</title>
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

        <!-- Modal Cancel Structure Start-->
        <div id="modal1" class="modal">
            <div class="modal-content">
                <h4>Peringatan</h4>
                <p>Apakah Anda yakin ingin membatalkan mengubah password?</p>
            </div>
            <div class="modal-footer">
                <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">No</a>
                <a href="Home" class="modal-action modal-close waves-effect waves-green btn-flat">Yes</a>
            </div>
        </div>
        <!-- Modal Cancel Structure End-->
        <!--////////////////////////////////////////////////////////////-->

        <!-- Modal Save Structure Start-->
        <div id="modal2" class="modal">
            <div class="modal-content">
                <h4>Peringatan</h4>
                <p>Apakah Anda yakin ingin menyimpan data?</p>
            </div>
            <div class="modal-footer">
                <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">No</a>
                <a href="Home" class="modal-action modal-close waves-effect waves-green btn-flat">Yes</a>
            </div>
        </div>
        <!-- Modal Save Structure End-->
        <!--////////////////////////////////////////////////////////////-->

        <div class="navbar-fixed">
            <nav class="nav-background">
                <div class="nav-wrapper">
                    <a href="" class="brand-logo"><img class="margin-on-med-and-down" src="material/images/logo-nav.png" style="padding-left:10px"></a>
                    <ul class="right hide-on-med-and-down">
                        <li><i class="material-icons black-text">account_circle</i></li>
                        <li><a class="dropdown-button black-text">John Doe</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <!--End Header-->
    <!--//////////////////////////////////////////////////////////////////////-->

	<div id="main">

		<!-- Start Login Form -->
        <div class="container">
            <div class="row" style="padding-top:60px">
                <div class="col s12 m12 l12">
                    <div class="row">
                        <form class="col s12" method="post" action="/project1/public/">
                            <div class="row center">
                                <div class="input-field col s12 center">
                                     <img class="circle responsive-img valign profile-image-login" src="images/surya-inn.jpg" style="width:90px;height:90px">
                                     <p class="center login-form-text header-text-color">SURYA INN ADMIN RESET PASSWORD</p>
                                </div>
                            </div>
                            <div class="row padding-on-med-and-down" style="margin-left:150px;margin-right:150px;">
                            	<div class="input-field col s12">
							        <i class="material-icons prefix">lock_outline</i>
							        <input id="password" type="password" class="validate">
							        <label for="password">New Password</label>
        						</div>
                            </div>
                            <div class="row padding-on-med-and-down" style="margin-left:150px;margin-right:150px;">
                                <div class="input-field col s12">
                                    <i class="material-icons prefix">lock_outline</i>
                                    <input id="password1" type="password" class="validate">
                                    <label for="password1">Retry Input New Password</label>
                                </div>
                            </div>
                            <div class="row padding-on-med-and-down" style="margin-left:150px;margin-right:150px;">
                            	<div class="input-field col s6 l6 m6">
                            		<a class="black-text modal-trigger" data-target="modal1" href="">Cancel?</a>
                            	</div>
                            	<div class="input-field right-align col s6 l6 m6">
                            		<a class="waves-effect waves-light btn side-nav-background modal-trigger" data-target="modal2">Save</a>
                            	</div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Login Form-->
        <!--//////////////////////////////////////////////////////////////////////-->

	</div>
    
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

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="material/materialize/js/materialize.min.js"></script>
    <script type="text/javascript">
        $('.modal').modal({
            dismissible: true, // Modal can be dismissed by clicking outside of the modal
            opacity: .5, // Opacity of modal background
            inDuration: 300, // Transition in duration
            outDuration: 100, // Transition out duration
            startingTop: '4%', // Starting top style attribute
            endingTop: '10%', // Ending top style attribute
            }
        );
    </script>
    <script src="material/pageloader/js/main.js"></script>

</body>
</html>