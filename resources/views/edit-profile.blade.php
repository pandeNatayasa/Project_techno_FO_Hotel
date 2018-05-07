<!DOCTYPE html>
<html>
<head>
	<title>Edit Profile | Front Office</title>
    <!--import link icon-->
    <link rel="icon" href="{{asset('material/images/logo-32x32.png')}}">
	<!--Import Google Icon Font-->
	<!--link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"-->
	<link href="{{asset('material/material-design-icons/css/material-icons.css')}}" rel="stylesheet">
	<!--Import materialize.css-->
	<link type="text/css" rel="stylesheet" href="{{asset('material/materialize/css/materialize.min.css')}}"  media="screen,projection"/>
	<link type="text/css" rel="stylesheet" href="{{asset('material/materialize/css/style.css')}}"  media="screen,projection"/>
	<link type="text/css" rel="stylesheet" href="{{asset('material/materialize/css/myStyle.css')}}"  media="screen,projection"/>
	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!--Import Page Loader-->
    <link rel="stylesheet" type="text/css" href="{{asset('material/pageloader/css/main.css')}}">
    <script src="{{asset('material/pageloader/js/vendor/modernizr-2.6.2.min.js')}}"></script>
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

    <header id="header">

        <!-- Modal Logout Structure Start-->
        <div id="modal3" class="modal">
            <div class="modal-content">
                <h4>Peringatan</h4>
                <p>Apakah Anda yakin ingin keluar dari sistem?</p>
            </div>
            <div class="modal-footer">
                <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">No</a>
                <a href="logout-proses.php" class="modal-action modal-close waves-effect waves-green btn-flat">Yes</a>
            </div>
        </div>
        <!-- Modal Logout Structure End-->
        <!--////////////////////////////////////////////////////////////-->

        <!-- Modal Cancel Structure Start-->
        <div id="modal1" class="modal">
            <div class="modal-content">
                <h4>Peringatan</h4>
                <p>Apakah Anda yakin ingin membatalkan menambah data?</p>
            </div>
            <div class="modal-footer">
                <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">No</a>
                <a href="dashboard" class="modal-action modal-close waves-effect waves-green btn-flat">Yes</a>
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
                <a href="dashboard" class="modal-action modal-close waves-effect waves-green btn-flat">Yes</a>
            </div>
        </div>
        <!-- Modal Save Structure End-->
        <!--////////////////////////////////////////////////////////////-->

        <!--Start Drop Down-->
        <ul id="dropdown1" class="dropdown-content">
            <li><a href="editProfile" class="black-text"><i class="material-icons black-text">person_outline</i>Profile</a>
            </li>
            <li class="divider"></li>
            <li><a href="signUp" class="black-text"><i class="small material-icons black-text">add_circle_outline</i>SignUp</a>
            </li>
            <li class="divider"></li>
            <li><a class="black-text modal-trigger" data-target="modal3" href=""><i class="material-icons black-text">exit_to_app</i>Logout</a>
            </li>
        </ul>
        <!--End Drop Down-->
        <!--////////////////////////////////////////////////////////////-->

        <!--Start Drop Down 2-->
        <ul id="dropdown2" class="dropdown-content">
            <li><a href="editProfile" class="black-text"><i class="material-icons black-text">person_outline</i>Profile</a>
            </li>
            <li class="divider"></li>
            <li><a href="signUp" class="black-text"><i class="small material-icons black-text">add_circle_outline</i>SignUp</a>
            </li>
            <li class="divider"></li>
            <li><a class="black-text modal-trigger" data-target="modal3" href=""><i class="material-icons black-text">exit_to_app</i>Logout</a>
            </li>
        </ul>
        <!--End Drop Down 2-->
        <!--////////////////////////////////////////////////////////////-->

		<div class="navbar-fixed">
			<nav class="nav-background">
				<div class="nav-wrapper">
					<a href="" class="brand-logo"><img class="margin-on-med-and-down" src="images/logo-nav.png" style="padding-left:10px"></a>
					<a href="#" data-activates="dropdown2" class="button-collapse"><i class="material-icons black-text">menu</i></a>
      				<ul class="right hide-on-med-and-down">
                        <li><i class="material-icons black-text">account_circle</i></li>
                        <li><a class="dropdown-button black-text" data-activates="dropdown1">John Doe<i class="material-icons black-text right">arrow_drop_down</i></a></li>
                    </ul>
				</div>
			</nav>
		</div>
	</header>

	<div id="main">

		<!-- Start Login Form -->
        <div class="container">
            <div class="row" style="padding-top:60px">
                <div class="col s12 m12 l12">
                    <div class="row">
                        <form class="col s12" method="post" action="dashboard">
                            <div class="row center">
                                <div class="input-field col s12 center">
                                     <img class="circle responsive-img valign profile-image-login" src="material/images/surya-inn.jpg" style="width:90px;height:90px">
                                     <p class="center login-form-text header-text-color">SURYA INN ADMIN EDIT ACCOUNT</p>
                                </div>
                            </div>
                            <div class="row padding-on-med-and-down" style="margin-left:150px;margin-right:150px;">
                                <div class="input-field col s12">
                                    <i class="material-icons prefix">confirmation_number</i>
                                    <input id="number" type="text" class="validate">
                                    <label for="number">ID Number</label>
                                </div>
                            </div>
                            <div class="row padding-on-med-and-down" style="margin-left:150px;margin-right:150px;">
                                <div class="input-field col s12">
                                    <i class="material-icons prefix">account_circle</i>
                                    <input id="name" type="text" class="validate">
                                    <label for="name">Name</label>
                                </div>
                            </div>
                            <div class="row padding-on-med-and-down" style="margin-left:150px;margin-right:150px;">
                                <div class="input-field col s12">
                                    <i class="material-icons prefix">contact_phone</i>
                                    <input id="noHp" type="text" class="validate">
                                    <label for="noHp">Phone Number</label>
                                </div>
                            </div>
                            <div class="row padding-on-med-and-down" style="margin-left:150px;margin-right:150px;">
                                <div class="input-field col s12">
                                    <i class="material-icons prefix">accessibility</i>
                                    <select>
                                        <option value="" disabled selected>Choose your option</option>
                                        <option value="1">Female</option>
                                        <option value="2">Male</option>
                                    </select>
                                    <label>Gender</label>
                                </div>
                            </div>
                            <div class="row padding-on-med-and-down" style="margin-left:150px;margin-right:150px;">
                                <div class="input-field col s12">
                                    <i class="material-icons prefix">toc</i>
                                    <select>
                                        <option value="" disabled selected>Choose your option</option>
                                        <option value="1">Admin</option>
                                        <option value="2">Staff</option>
                                    </select>
                                    <label>Position</label>
                                </div>
                            </div>
                            <div class="row padding-on-med-and-down" style="margin-left:150px;margin-right:150px;">
                                <div class="input-field col s12">
                                    <i class="material-icons prefix">location_on</i>
                                    <input id="address" type="text" class="validate">
                                    <label for="address">Address</label>
                                </div>
                            </div>
                            <div class="row padding-on-med-and-down" style="margin-left:150px;margin-right:150px;">
                                <div class="input-field col s12">
							        <i class="material-icons prefix">person_outline</i>
							        <input id="username" type="text" class="validate">
							        <label for="username">User Name</label>
        						</div>
                            </div>
                            <div class="row padding-on-med-and-down" style="margin-left:150px;margin-right:150px;">
                            	<div class="input-field col s12">
							        <i class="material-icons prefix">lock_outline</i>
							        <input id="password" type="password" class="validate">
							        <label for="password">Password</label>
        						</div>
                            </div>
                            <div class="row padding-on-med-and-down" style="margin-left:150px;margin-right:150px;">
                            	<div class="input-field col s6 l6 m6">
                            		<a class="black-text modal-trigger" data-target="modal1" href="">Cancel?</a>
                            	</div>
                            	<div class="input-field right-align col s6 l6 m6">
                            		<a class="waves-effect waves-light btn side-nav-background modal-trigger" data-target="modal2">Save</a>
                            	</div>
                                <!--Start Modal-->
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
	<script type="text/javascript" src="{{asset('material/materialize/js/materialize.min.js')}}"></script>
	<script type="text/javascript">
    	// Initialize collapse button
  		$(".button-collapse").dropdown();
  		// Initialize collapsible (uncomment the line below if you use the dropdown variation)
 		//$('.collapsible').collapsible();
        $('.modal').modal({
            dismissible: true, // Modal can be dismissed by clicking outside of the modal
            opacity: .5, // Opacity of modal background
            inDuration: 300, // Transition in duration
            outDuration: 100, // Transition out duration
            startingTop: '4%', // Starting top style attribute
            endingTop: '10%', // Ending top style attribute
            }
        );
        $(document).ready(function() {
            $('select').material_select();
        });
    </script>
    <script src="{{asset('material/pageloader/js/main.js')}}"></script>

</body>
</html>