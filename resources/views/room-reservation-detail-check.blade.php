<!DOCTYPE html>
<html>
<head>
	<title>Room Reservation Check | Front Office</title>
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
</head>
<body class="grey lighten-4">
	<!--Start Header-->
	<header>

		<!-- Modal Logout Structure Start-->
        <div id="modal1" class="modal">
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

        <!-- Modal Reservation Structure Start-->
        <div id="modal2" class="modal">
            <div class="modal-content">
                <h4>Reservation Input</h4>
                <p>Data Berhasil Disimpan</p>
                <p>Apakah Anda Ingin Melanjutkan Ke Check-In</p>
            </div>
            <div class="modal-footer">
                <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">No</a>
                <a href="check-in-detail.html" class="modal-action modal-close waves-effect waves-green btn-flat">Yes</a>
            </div>
        </div>
        <!-- Modal Reservation Structure End-->
        <!--////////////////////////////////////////////////////////////-->

		<!--Start Drop Down-->
    	<ul id="dropdown1" class="dropdown-content">
            <li><a href="editProfile" class="black-text"><i class="material-icons black-text">person_outline</i>Profile</a>
            </li>
            <li class="divider"></li>
            <li><a href="signUp" class="black-text"><i class="small material-icons black-text">add_circle_outline</i>SignUp</a>
            </li>
            <li class="divider"></li>
            <li><a class="black-text modal-trigger" data-target="modal1" href=""><i class="material-icons black-text">exit_to_app</i>Logout</a>
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
            <li><a class="black-text modal-trigger" data-target="modal1" href=""><i class="material-icons black-text">exit_to_app</i>Logout</a>
            </li>
        </ul>
        <!--End Drop Down 2-->
        <!--////////////////////////////////////////////////////////////-->

        <!--Start Nav Bar-->
		<nav class="top-nav nav-background margin margin-on-med-and-down">
			<div class="nav-fixed">
				<a href="" class="brand-logo"><img class="hide-on-large-only" src="material/images/logo-nav.png"></a>
				<div class="hide-on-large-only">
					<a class="button-collapse" href="#" data-activates="nav-mobile"><i class="black-text material-icons">menu</i></a>	
				</div>
				<ul class="right hide-on-med-and-down">
					<li><i class="material-icons black-text">account_circle</i></li>
					<li><a class="dropdown-button black-text" data-activates="dropdown1">John Doe<i class="material-icons black-text right">arrow_drop_down</i></a></li>
				</ul>
			</div>
			<!--////////////////////////////////////////////////////////////-->

			<!--Start Left Nav-->
			<div>
				<ul id="nav-mobile" class="side-nav fixed side-nav-background">
					<li>
						<img src="material/images/logo-left-nav.png" style="width:100%">
					</li>
					<li class="user-profile hide-on-med-and-down" style="margin-bottom:20px">
						<div class="row">
                    		<div class="col m2">
								<div class="col s12 center">
									<a href="#!user"><img class="circle" src="material/images/surya-inn.jpg"></a>
								</div>
							</div>
							<div class="col m10">
								<div class="col s12 center">
									<p class="name">John Doe</p>
								</div>
							</div>
                		</div>
					</li>
      				<li class="white-text"><a class="white-text" href="dashboard"><i class="material-icons white-text">dashboard</i> Dashboard</a></li>
      				<li><a class="white-text active-li" href="roomReservation"><i class="material-icons white-text">hotel</i> Room Reservation</a></li>
      				<li><a class="white-text" href="checkIn"><i class="material-icons white-text">person_pin</i>Check In</a></li>
      				<li><a class="white-text" href="checkOut"><i class="material-icons white-text">insert_invitation</i>Check Out</a></li>
      				<li><a class="white-text" href="roomService"><i class="material-icons white-text">room_service</i>Room Service</a></li>
      				<li class="hide-on-large-only"> 
      					<div class="divider"></div>
      					<div class="user-view row">
      						<div class="col m2">
								<div class="col s12 center">
									<a href="#!user"><img class="circle" src="material/images/surya-inn.jpg"></a>
								</div>
							</div>
							<div class="col m10">
								<div class="col s12 center">
									<a class="dropdown-button" data-activates="dropdown2">John Doe<i class="material-icons right">arrow_drop_down</i></a>
								</div>
							</div>
      					</div>
      				</li>
    			</ul>
			</div>
			<!--End Left Nav-->
			<!--////////////////////////////////////////////////////////////-->

		</nav>
		<!--End Nav Bar-->
		<!--////////////////////////////////////////////////////////////-->

	</header>
	<!--End Header-->
	<!--////////////////////////////////////////////////////////////-->

	<!--Start Content-->
	<div id="main">
		<section id="content">
			<div class="container-main margin-on-med-and-down">
				
				<!--Start Header Content-->
				<div class="row">
					<div class="col s12 m12 l12">
						<h3 class="header-color-text center">Front Office Application</h3>
					</div>
				</div>
				<!--End Header Content-->
				<!--////////////////////////////////////////////////////////////-->

				<!--Start Table Content-->
				<div id="table-content">
					<div class="row white">
						<div class="col s12" style="padding-bottom:10px">
							<h5 class="header-color-text center">Reservation Input</h5>
						</div>

						<!--Start Check In Detail-->
						<div class="col s12 m12 l6">
							<div class="row">
								<form class="col s12">
									<div class="row">
										<div class="input-field col s12">
											<input id="fullName" type="text" class="validate">
											<label for="fullName">Nama Pemesan</label>
										</div>
									</div>
									<div class="row">
										<div class="input-field col s12">
											<input id="idNumber" type="text" class="validate">
											<label for="idNumber">No. Identitas</label>
										</div>
									</div>
									<div class="row">
										<div class="input-field col s12">
											<input id="alamat" type="text" class="validate">
											<label for="alamat">Alamat Pemesan</label>
										</div>
									</div>
									<div class="row">
										<div class="input-field col s12">
											<input type="text" id="noHp">
											<label for="noHp">No. Handphone Kontak</label>
										</div>
									</div>
									<div class="row">
										<div class="input-field col s12">
											 <select>
											 	<option value="" disabled selected>Choose your option</option>
											 	<option value="1">Female</option>
											 	<option value="2">Male</option>
											 </select>
											 <label>Gender</label>
										</div>
									</div>
									<div class="row">
										<div class="input-field col s12">
											<input type="text" id="birthDay" class="datepicker">
											<label for="birthDay">Birth Day</label>
										</div>
									</div>
								</form>
							</div>
						</div>
						<!--End Check In Detail-->
						<!--////////////////////////////////////////////////////////////-->

						<!--Start ID Booking Input-->
						<div class="col s12 m12 l6 white border-left-table hide-border-on-med-and-down">
							<div class="divider-form hide-on-large-only"></div>
							<div class="row">
								<div class="input-field col s12">
									<input type="text" id="roomType" name="roomType">
									<label for="roomType">Room Type</label>
								</div>
							</div>
							<div class="row">
								<div class="input-field col s12">
									<input type="text" id="check-in" class="datepicker">
									<label for="check-in">Check In</label>
								</div>
							</div>
							<div class="row">
								<div class="input-field col s12">
									<input type="text" id="check-out" class="datepicker">
									<label for="check-out">Check Out</label>
								</div>
							</div>
							<div class="row">
								<div class="col s12">
									<label>Addtional Service</label>
									<div class="row">
										<div class="col l6">
											<p>
												<input type="checkbox" id="test1" />
												<label for="test1">Breakfast</label>
											</p>
											<p>
												<input type="checkbox" id="test1" />
												<label for="test1">Breakfast</label>
											</p>
											<p>
												<input type="checkbox" id="test1" />
												<label for="test1">Breakfast</label>
											</p>
										</div>
										<div class="col l6">
											<p>
												<input type="checkbox" id="test1" />
												<label for="test1">Breakfast</label>
											</p>
											<p>
												<input type="checkbox" id="test1" />
												<label for="test1">Breakfast</label>
											</p>
											<p>
												<input type="checkbox" id="test1" />
												<label for="test1">Breakfast</label>
											</p>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="divider"></div>
								<p class="col s12">Apakah Data Anda Telah Benar?</p>
								<div class="col s12">
									<a class="waves-effect waves-light btn side-nav-background" href="room-reservation-detail.html">Belun</a>
									<a class="waves-effect waves-light btn side-nav-background modal-trigger" data-target="modal2" href="paymentMethod" style="display: inline-block;">Sudah</a>
								</div>
							</div>

						</div>
						<!--End ID Booking Input-->
						<!--////////////////////////////////////////////////////////////-->

					</div>
				</div>
				<!--End Table Content-->

			</div>
		</section>
	</div>
	<!--End Content-->
	
	<!--Start Footer-->
    <footer class="page-footer nav-background">
        <div class="container-main margin-on-med-and-down">
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
            <div class="container-main margin-on-med-and-down">
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
    	// Initialize collapse button
  		$(".button-collapse").sideNav();
  		// Initialize collapsible (uncomment the line below if you use the dropdown variation)
 		//$('.collapsible').collapsible();
 		$(document).ready(function() {
    		$('select').material_select();
  		});
  		$('.datepicker').pickadate({
		    selectMonths: true, // Creates a dropdown to control month
		    selectYears: 15, // Creates a dropdown of 15 years to control year,
		    today: 'Today',
		    clear: 'Clear',
		    close: 'Ok',
		    closeOnSelect: false // Close upon selecting a date,
  		});
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

</body>
</html>