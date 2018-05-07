<!DOCTYPE html>
<html>
<head>
	<title>Room Reservation | Front Office</title>
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
	<style type="text/css">
		.border-room{
			border-bottom-color:#4caf50;
			border-bottom-width:5px;
			border-bottom-style: solid;
		}
		.border-room-right{
			border-right-color:#4caf50;
			border-right-width:5px;
			border-right-style: solid;	
		}
	</style>
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<!--Import Page Loader-->
    <link rel="stylesheet" type="text/css" href="material/pageloader/css/main.css">
    <script src="material/pageloader/js/vendor/modernizr-2.6.2.min.js"></script>
</head>
<body class="grey lighten-4">

	<!--Start Page Loader-->
    <!-- <div id="loader-wrapper">
        <div id="loader"></div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div> -->
    <!--Start Page Loader-->
    <!--//////////////////////////////////////////////////////////////////////-->

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

        <!-- Modal Room Structure Start-->

        <!-- Modal Room 201 Start-->
        <div id="modal2" class="modal">
            <div class="modal-content">
                <h4 class="center">Room Detail</h4>
                <img src="material/images/1.jpg" style="width:100%">
            </div>
            <div class="modal-footer">
                <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Close</a>
                <a href="register.html" class="modal-action modal-close waves-effect waves-green btn-flat">Register</a>
            </div>
        </div>
        <!-- Modal Room 201 End-->
        <!--////////////////////////////////////////////////////////////-->

        <!-- Modal Room 202 Start-->
        <div id="modal3" class="modal">
            <div class="modal-content">
                <h4 class="center">Room Detail</h4>
                <img src="material/images/2.jpg" style="width:100%">
            </div>
            <div class="modal-footer">
                <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Close</a>
                <a href="register.html" class="modal-action modal-close waves-effect waves-green btn-flat">Register</a>
            </div>
        </div>
        <!-- Modal Room 202 End-->
        <!--////////////////////////////////////////////////////////////-->

        <!-- Modal Room Structure End-->
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

					<!--Start Room Reservation-->
					<div class="row white">

						<!--Start Header-->
						<div class="row" style="padding-top:10px">
							<div class="col s12 m12 l6">
								<div class="row">
									<h5 class="header-color-text margin-on-med-and-down" style="padding-left:20px">Room Reception</h5>
								</div>
							</div>
							<div class="col s12 m12 l6">
								<div class="row">
									<div class="input-field col s12">
										<i class="material-icons prefix">event_note</i>
										 <input id="check-in" type="text" class="datepicker">
										 <label for="check-in">Check-In</label>
									</div>
								</div>
							</div>
						</div>
						<!--End Header-->
						<!--////////////////////////////////////////////////////////////-->

						<div class="row">
							<div class="col s12">
								<div class="divider"></div>
								<p class="center" style="font-size:16pt">Floor</p>
								<div class="divider"></div>
								<ul class="tabs">
									<li class="tab col s3"><a href="#test1">2nd</a></li>
									<li class="tab col s3"><a href="#test2">3rd</a></li>
									<li class="tab col s3"><a href="#test3">4th</a></li>
									<li class="tab col s3"><a href="#test4">5th</a></li>
								</ul>
							</div>
							<div id="test1" class="col s12 center">
								<!--Start 2nd Denah-->
								<div class="col m9 border-all-table padding-on-med-and-down" style="margin-top:20px;margin-left:90px">
									<div class="row col s12" style="margin-top:20px">
										<a href="room-detail">
											<div class="col m2 yellow border-all-table border-room">
												<div class="col s12">
													<p class="header-color-text center">201</p>
												</div>	
											</div>
										</a>
										<a class="black-text modal-trigger" data-target="modal3" href="room-detail">
											<div class="col m2 grey lighten-2 border-all-table border-room">
												<div class="col s12">
													<p class="header-color-text center">202</p>	
												</div>
											</div>
										</a>
										<a href="room-detail">
											<div class="col m2 grey lighten-2 border-all-table border-room">
												<div class="col s12">
													<p class="header-color-text center">203</p>	
												</div>
											</div>
										</a>
										<a href="room-detail">
											<div class="col m2 orange border-all-table border-room">
												<div class="col s12">
													<p class="header-color-text center">204</p>
												</div>
											</div>
										</a>
										<a href="room-detail">
											<div class="col m2 orange border-all-table border-room">
												<div class="col s12">
													<p class="header-color-text center">205</p>
												</div>
											</div>
										</a>
										<a href="room-detail">
											<div class="col m2 orange border-all-table border-room">
												<div class="col s12">
												 	<p class="header-color-text center">206</p>
												</div>
											</div>
										</a>
									</div>

									<div class="row col s12" style="margin-bottom:0px;">
										<a href="room-detail">
											<div class="col m2 orange border-all-table border-room-right">
												<div class="col s12">
													<p class="center header-color-text">207</p>
												</div>
											</div>
										</a>
										<div class="col m1">
											<div class="col s12">
												
											</div>
										</div>
										<a href="room-detail">
											<div class="col m2 grey lighten-2 border-all-table border-room-right">
												<div class="col s12">
													<p class="center header-color-text">208</p>
												</div>
											</div>
										</a>
										<div class="col m1">
											<div class="col s12">
												
											</div>
										</div>
										<a href="room-detail">
											<div class="col m2 grey lighten-2 border-all-table border-room-right">
												<div class="col s12">
													<p class="center header-color-text">209</p>
												</div>
											</div>
										</a>
										<div class="col m1">
											<div class="col s12">
												
											</div>
										</div>
										<a href="room-detail">
											<div class="col m2 grey lighten-2 border-all-table border-room-right">
												<div class="col s12">
													<p class="center header-color-text">210</p>
												</div>
											</div>
										</a>
										<div class="col m1">
											<div class="col s12">
												
											</div>
										</div>
									</div>

									<div class="row col s12">
										<a href="room-detail">
											<div class="col m2 orange border-all-table border-room-right">
												<div class="col s12">
													<p class="center header-color-text">211</p>
												</div>
											</div>
										</a>
										<div class="col m1">
											<div class="col s12">
												
											</div>
										</div>
										<a href="room-detail">
											<div class="col m2 grey lighten-2 border-all-table border-room-right">
												<div class="col s12">
													<p class="center header-color-text">212</p>
												</div>
											</div>
										</a>
										<div class="col m1">
											<div class="col s12">
												
											</div>
										</div>
										<a href="room-detail">
											<div class="col m2 grey lighten-2 border-all-table border-room-right">
												<div class="col s12">
													<p class="center header-color-text">213</p>
												</div>
											</div>
										</a>
										<div class="col m1">
											<div class="col s12">
												
											</div>
										</div>
										<a href="room-detail">
											<div class="col m2 grey lighten-2 border-all-table border-room-right">
												<div class="col s12">
													<p class="center header-color-text">214</p>
												</div>
											</div>
										</a>
										<div class="col m1">
											<div class="col s12">
												
											</div>
										</div>
									</div>

									<div class="row col s12">
										<a href="room-detail">
											<div class="col m2 yellow border-all-table border-room">
												<div class="col s12">
													<p class="header-color-text center">215</p>
												</div>
											</div>
										</a>
										<a href="room-detail">
											<div class="col m2 grey lighten-2 border-all-table border-room">
												<div class="col s12">
													<p class="header-color-text center">216</p>
												</div>
											</div>
										</a>
										<a href="room-detail">
											<div class="col m2 grey lighten-2 border-all-table border-room">
												<div class="col s12">
													<p class="header-color-text center">217</p>
												</div>
											</div>
										</a>
										<a href="room-detail">
											<div class="col m2 orange border-all-table border-room">
												<div class="col s12">
													<p class="header-color-text center">218</p>
												</div>
											</div>
										</a>
										<a href="room-detail">
											<div class="col m2 orange border-all-table border-room">
												<div class="col s12">
													<p class="header-color-text center">219</p>
												</div>
											</div>
										</a>
										<a href="room-detail">
											<div class="col m2 orange border-all-table border-room">
												<div class="col s12">
													<p class="header-color-text center">220</p>
												</div>
											</div>
										</a>
									</div>

									<div class="row col s12 divider-form"></div>

									<div class="row">
										<div class="col m2 left">
											<h6>Legend</h6>
										</div>
										<div class="col m2">
											<div class="center" style="font-size:9pt">Available</div> 
											<div class="border-room"></div>
										</div>
										<div class="col m2">
											<div class="center" style="font-size:9pt">Non Available</div> 
											<div class="border-room" style="border-color: #f44336"></div>
										</div>
										<div class="col m2">
											<div class="center" style="font-size:9pt">Standar</div> 
											<div class="border-room" style="border-color: #e0e0e0; border-width:20px;"></div>
										</div>
										<div class="col m2">
											<div class="center" style="font-size:9pt">Superior</div> 
											<div class="border-room" style="border-color: #ff9800; border-width:20px;"></div>
										</div>
										<div class="col m2">
											<div class="center" style="font-size:9pt">Deluxe</div> 
											<div class="border-room" style="border-color: #ffeb3b; border-width:20px;"></div>
										</div>
									</div>

								</div>
								<!--End 2nd Denah-->
								<!--////////////////////////////////////////////////////////////-->
							</div>

							<div id="test2" class="col s12">
								<!--Start 2nd Denah-->
								<div class="col m9 border-all-table padding-on-med-and-down" style="margin-top:20px;margin-left:90px">
									<div class="row col s12" style="margin-top:20px">
										<a href="room-detail">
											<div class="col m2 yellow border-all-table border-room">
												<div class="col s12">
													<p class="header-color-text center">301</p>
												</div>	
											</div>
										</a>
										<a class="black-text modal-trigger" data-target="modal3" href="room-detail">
											<div class="col m2 grey lighten-2 border-all-table border-room">
												<div class="col s12">
													<p class="header-color-text center">302</p>	
												</div>
											</div>
										</a>
										<a href="room-detail">
											<div class="col m2 grey lighten-2 border-all-table border-room">
												<div class="col s12">
													<p class="header-color-text center">303</p>	
												</div>
											</div>
										</a>
										<a href="room-detail">
											<div class="col m2 orange border-all-table border-room">
												<div class="col s12">
													<p class="header-color-text center">304</p>
												</div>
											</div>
										</a>
										<a href="room-detail">
											<div class="col m2 orange border-all-table border-room">
												<div class="col s12">
													<p class="header-color-text center">305</p>
												</div>
											</div>
										</a>
										<a href="room-detail">
											<div class="col m2 orange border-all-table border-room">
												<div class="col s12">
												 	<p class="header-color-text center">306</p>
												</div>
											</div>
										</a>
									</div>

									<div class="row col s12" style="margin-bottom:0px;">
										<a href="room-detail">
											<div class="col m2 orange border-all-table border-room-right">
												<div class="col s12">
													<p class="center header-color-text">307</p>
												</div>
											</div>
										</a>
										<div class="col m1">
											<div class="col s12">
												
											</div>
										</div>
										<a href="room-detail">
											<div class="col m2 grey lighten-2 border-all-table border-room-right">
												<div class="col s12">
													<p class="center header-color-text">308</p>
												</div>
											</div>
										</a>
										<div class="col m1">
											<div class="col s12">
												
											</div>
										</div>
										<a href="room-detail">
											<div class="col m2 grey lighten-2 border-all-table border-room-right">
												<div class="col s12">
													<p class="center header-color-text">309</p>
												</div>
											</div>
										</a>
										<div class="col m1">
											<div class="col s12">
												
											</div>
										</div>
										<a href="room-detail">
											<div class="col m2 grey lighten-2 border-all-table border-room-right">
												<div class="col s12">
													<p class="center header-color-text">310</p>
												</div>
											</div>
										</a>
										<div class="col m1">
											<div class="col s12">
												
											</div>
										</div>
									</div>

									<div class="row col s12">
										<a href="room-detail">
											<div class="col m2 orange border-all-table border-room-right">
												<div class="col s12">
													<p class="center header-color-text">311</p>
												</div>
											</div>
										</a>
										<div class="col m1">
											<div class="col s12">
												
											</div>
										</div>
										<a href="room-detail">
											<div class="col m2 grey lighten-2 border-all-table border-room-right">
												<div class="col s12">
													<p class="center header-color-text">312</p>
												</div>
											</div>
										</a>
										<div class="col m1">
											<div class="col s12">
												
											</div>
										</div>
										<a href="room-detail">
											<div class="col m2 grey lighten-2 border-all-table border-room-right">
												<div class="col s12">
													<p class="center header-color-text">313</p>
												</div>
											</div>
										</a>
										<div class="col m1">
											<div class="col s12">
												
											</div>
										</div>
										<a href="room-detail">
											<div class="col m2 grey lighten-2 border-all-table border-room-right">
												<div class="col s12">
													<p class="center header-color-text">314</p>
												</div>
											</div>
										</a>
										<div class="col m1">
											<div class="col s12">
												
											</div>
										</div>
									</div>

									<div class="row col s12">
										<a href="room-detail">
											<div class="col m2 yellow border-all-table border-room">
												<div class="col s12">
													<p class="header-color-text center">315</p>
												</div>
											</div>
										</a>
										<a href="room-detail">
											<div class="col m2 grey lighten-2 border-all-table border-room">
												<div class="col s12">
													<p class="header-color-text center">316</p>
												</div>
											</div>
										</a>
										<a href="room-detail">
											<div class="col m2 grey lighten-2 border-all-table border-room">
												<div class="col s12">
													<p class="header-color-text center">317</p>
												</div>
											</div>
										</a>
										<a href="room-detail">
											<div class="col m2 orange border-all-table border-room">
												<div class="col s12">
													<p class="header-color-text center">318</p>
												</div>
											</div>
										</a>
										<a href="room-detail">
											<div class="col m2 orange border-all-table border-room">
												<div class="col s12">
													<p class="header-color-text center">319</p>
												</div>
											</div>
										</a>
										<a href="room-detail">
											<div class="col m2 orange border-all-table border-room">
												<div class="col s12">
													<p class="header-color-text center">320</p>
												</div>
											</div>
										</a>
									</div>

									<div class="row col s12 divider-form"></div>

									<div class="row">
										<div class="col m2">
											<h6>Legend</h6>
										</div>
										<div class="col m2">
											<div class="center" style="font-size:9pt">Available</div> 
											<div class="border-room"></div>
										</div>
										<div class="col m2">
											<div class="center" style="font-size:9pt">Non Available</div> 
											<div class="border-room" style="border-color: #f44336"></div>
										</div>
										<div class="col m2">
											<div class="center" style="font-size:9pt">Standar</div> 
											<div class="border-room" style="border-color: #e0e0e0; border-width:20px;"></div>
										</div>
										<div class="col m2">
											<div class="center" style="font-size:9pt">Superior</div> 
											<div class="border-room" style="border-color: #ff9800; border-width:20px;"></div>
										</div>
										<div class="col m2">
											<div class="center" style="font-size:9pt">Deluxe</div> 
											<div class="border-room" style="border-color: #ffeb3b; border-width:20px;"></div>
										</div>
									</div>

								</div>
								<!--End 3rd Denah-->
								<!--////////////////////////////////////////////////////////////-->
							</div>

							<div id="test3" class="col s12">
								<!--Start 4th Denah-->
								<div class="col m9 border-all-table padding-on-med-and-down" style="margin-top:20px;margin-left:90px">
									<div class="row col s12" style="margin-top:20px">
										<a href="room-detail">
											<div class="col m2 yellow border-all-table border-room">
												<div class="col s12">
													<p class="header-color-text center">401</p>
												</div>	
											</div>
										</a>
										<a class="black-text modal-trigger" data-target="modal3" href="">
											<div class="col m2 grey lighten-2 border-all-table border-room">
												<div class="col s12">
													<p class="header-color-text center">402</p>	
												</div>
											</div>
										</a>
										<a href="room-detail">
											<div class="col m2 grey lighten-2 border-all-table border-room">
												<div class="col s12">
													<p class="header-color-text center">403</p>	
												</div>
											</div>
										</a>
										<a href="room-detail">
											<div class="col m2 orange border-all-table border-room">
												<div class="col s12">
													<p class="header-color-text center">404</p>
												</div>
											</div>
										</a>
										<a href="room-detail">
											<div class="col m2 orange border-all-table border-room">
												<div class="col s12">
													<p class="header-color-text center">405</p>
												</div>
											</div>
										</a>
										<a href="room-detail">
											<div class="col m2 orange border-all-table border-room">
												<div class="col s12">
												 	<p class="header-color-text center">406</p>
												</div>
											</div>
										</a>
									</div>

									<div class="row col s12" style="margin-bottom:0px;">
										<a href="room-detail">
											<div class="col m2 orange border-all-table border-room-right">
												<div class="col s12">
													<p class="center header-color-text">407</p>
												</div>
											</div>
										</a>
										<div class="col m1">
											<div class="col s12">
												
											</div>
										</div>
										<a href="room-detail">
											<div class="col m2 grey lighten-2 border-all-table border-room-right">
												<div class="col s12">
													<p class="center header-color-text">408</p>
												</div>
											</div>
										</a>
										<div class="col m1">
											<div class="col s12">
												
											</div>
										</div>
										<a href="room-detail">
											<div class="col m2 grey lighten-2 border-all-table border-room-right">
												<div class="col s12">
													<p class="center header-color-text">409</p>
												</div>
											</div>
										</a>
										<div class="col m1">
											<div class="col s12">
												
											</div>
										</div>
										<a href="room-detail">
											<div class="col m2 grey lighten-2 border-all-table border-room-right">
												<div class="col s12">
													<p class="center header-color-text">410</p>
												</div>
											</div>
										</a>
										<div class="col m1">
											<div class="col s12">
												
											</div>
										</div>
									</div>

									<div class="row col s12">
										<a href="room-detail">
											<div class="col m2 orange border-all-table border-room-right">
												<div class="col s12">
													<p class="center header-color-text">411</p>
												</div>
											</div>
										</a>
										<div class="col m1">
											<div class="col s12">
												
											</div>
										</div>
										<a href="room-detail">
											<div class="col m2 grey lighten-2 border-all-table border-room-right">
												<div class="col s12">
													<p class="center header-color-text">412</p>
												</div>
											</div>
										</a>
										<div class="col m1">
											<div class="col s12">
												
											</div>
										</div>
										<a href="room-detail">
											<div class="col m2 grey lighten-2 border-all-table border-room-right">
												<div class="col s12">
													<p class="center header-color-text">413</p>
												</div>
											</div>
										</a>
										<div class="col m1">
											<div class="col s12">
												
											</div>
										</div>
										<a href="room-detail">
											<div class="col m2 grey lighten-2 border-all-table border-room-right">
												<div class="col s12">
													<p class="center header-color-text">414</p>
												</div>
											</div>
										</a>
										<div class="col m1">
											<div class="col s12">
												
											</div>
										</div>
									</div>

									<div class="row col s12">
										<a href="room-detail">
											<div class="col m2 yellow border-all-table border-room">
												<div class="col s12">
													<p class="header-color-text center">415</p>
												</div>
											</div>
										</a>
										<a href="room-detail">
											<div class="col m2 grey lighten-2 border-all-table border-room">
												<div class="col s12">
													<p class="header-color-text center">416</p>
												</div>
											</div>
										</a>
										<a href="room-detail">
											<div class="col m2 grey lighten-2 border-all-table border-room">
												<div class="col s12">
													<p class="header-color-text center">417</p>
												</div>
											</div>
										</a>
										<a href="room-detail">
											<div class="col m2 orange border-all-table border-room">
												<div class="col s12">
													<p class="header-color-text center">418</p>
												</div>
											</div>
										</a>
										<a href="room-detail">
											<div class="col m2 orange border-all-table border-room">
												<div class="col s12">
													<p class="header-color-text center">419</p>
												</div>
											</div>
										</a>
										<a href="room-detail">
											<div class="col m2 orange border-all-table border-room">
												<div class="col s12">
													<p class="header-color-text center">420</p>
												</div>
											</div>
										</a>
									</div>

									<div class="row col s12 divider-form"></div>

									<div class="row">
										<div class="col m2">
											<h6>Legend</h6>
										</div>
										<div class="col m2">
											<div class="center" style="font-size:9pt">Available</div> 
											<div class="border-room"></div>
										</div>
										<div class="col m2">
											<div class="center" style="font-size:9pt">Non Available</div> 
											<div class="border-room" style="border-color: #f44336"></div>
										</div>
										<div class="col m2">
											<div class="center" style="font-size:9pt">Standar</div> 
											<div class="border-room" style="border-color: #e0e0e0; border-width:20px;"></div>
										</div>
										<div class="col m2">
											<div class="center" style="font-size:9pt">Superior</div> 
											<div class="border-room" style="border-color: #ff9800; border-width:20px;"></div>
										</div>
										<div class="col m2">
											<div class="center" style="font-size:9pt">Deluxe</div> 
											<div class="border-room" style="border-color: #ffeb3b; border-width:20px;"></div>
										</div>
									</div>

								</div>
								<!--End 4th Denah-->
								<!--////////////////////////////////////////////////////////////-->
							</div>

							<div id="test4" class="col s12">
								<!--Start 5th Denah-->
								<div class="col m9 border-all-table padding-on-med-and-down" style="margin-top:20px;margin-left:90px">
									<div class="row col s12" style="margin-top:20px">
										<a href="room-detail">
											<div class="col m2 yellow border-all-table border-room">
												<div class="col s12">
													<p class="header-color-text center">501</p>
												</div>	
											</div>
										</a>
										<a class="black-text modal-trigger" data-target="modal3" href="room-detail">
											<div class="col m2 grey lighten-2 border-all-table border-room">
												<div class="col s12">
													<p class="header-color-text center">502</p>	
												</div>
											</div>
										</a>
										<a href="room-detail">
											<div class="col m2 grey lighten-2 border-all-table border-room">
												<div class="col s12">
													<p class="header-color-text center">503</p>	
												</div>
											</div>
										</a>
										<a href="room-detail">
											<div class="col m2 orange border-all-table border-room">
												<div class="col s12">
													<p class="header-color-text center">504</p>
												</div>
											</div>
										</a>
										<a href="room-detail">
											<div class="col m2 orange border-all-table border-room">
												<div class="col s12">
													<p class="header-color-text center">505</p>
												</div>
											</div>
										</a>
										<a href="room-detail">
											<div class="col m2 orange border-all-table border-room">
												<div class="col s12">
												 	<p class="header-color-text center">506</p>
												</div>
											</div>
										</a>
									</div>

									<div class="row col s12" style="margin-bottom:0px;">
										<a href="room-detail">
											<div class="col m2 orange border-all-table border-room-right">
												<div class="col s12">
													<p class="center header-color-text">507</p>
												</div>
											</div>
										</a>
										<div class="col m1">
											<div class="col s12">
												
											</div>
										</div>
										<a href="room-detail">
											<div class="col m2 grey lighten-2 border-all-table border-room-right">
												<div class="col s12">
													<p class="" ="center header-color-text">508</p>
												</div>
											</div>
										</a>
										<div class="col m1">
											<div class="col s12">
												
											</div>
										</div>
										<a href="room-detail">
											<div class="col m2 grey lighten-2 border-all-table border-room-right">
												<div class="col s12">
													<p class="center header-color-text">509</p>
												</div>
											</div>
										</a>
										<div class="col m1">
											<div class="col s12">
												
											</div>
										</div>
										<a href="room-detail">
											<div class="col m2 grey lighten-2 border-all-table border-room-right">
												<div class="col s12">
													<p class="center header-color-text">510</p>
												</div>
											</div>
										</a>
										<div class="col m1">
											<div class="col s12">
												
											</div>
										</div>
									</div>

									<div class="row col s12">
										<a href="room-detail">
											<div class="col m2 orange border-all-table border-room-right">
												<div class="col s12">
													<p class="center header-color-text">511</p>
												</div>
											</div>
										</a>
										<div class="col m1">
											<div class="col s12">
												
											</div>
										</div>
										<a href="room-detail">
											<div class="col m2 grey lighten-2 border-all-table border-room-right">
												<div class="col s12">
													<p class="center header-color-text">512</p>
												</div>
											</div>
										</a>
										<div class="col m1">
											<div class="col s12">
												
											</div>
										</div>
										<a href="">
											<div class="col m2 grey lighten-2 border-all-table border-room-right">
												<div class="col s12">
													<p class="center header-color-text">513</p>
												</div>
											</div>
										</a>
										<div class="col m1">
											<div class="col s12">
												
											</div>
										</div>
										<a href="room-detail">
											<div class="col m2 grey lighten-2 border-all-table border-room-right">
												<div class="col s12">
													<p class="center header-color-text">514</p>
												</div>
											</div>
										</a>
										<div class="col m1">
											<div class="col s12">
												
											</div>
										</div>
									</div>

									<div class="row col s12">
										<a href="room-detail">
											<div class="col m2 yellow border-all-table border-room">
												<div class="col s12">
													<p class="header-color-text center">515</p>
												</div>
											</div>
										</a>
										<a href="room-detail">
											<div class="col m2 grey lighten-2 border-all-table border-room">
												<div class="col s12">
													<p class="header-color-text center">516</p>
												</div>
											</div>
										</a>
										<a href="room-detail">
											<div class="col m2 grey lighten-2 border-all-table border-room">
												<div class="col s12">
													<p class="header-color-text center">517</p>
												</div>
											</div>
										</a>
										<a href="room-detail">
											<div class="col m2 orange border-all-table border-room">
												<div class="col s12">
													<p class="header-color-text center">518</p>
												</div>
											</div>
										</a>
										<a href="room-detail">
											<div class="col m2 orange border-all-table border-room">
												<div class="col s12">
													<p class="header-color-text center">519</p>
												</div>
											</div>
										</a>
										<a href="room-detail">
											<div class="col m2 orange border-all-table border-room">
												<div class="col s12">
													<p class="header-color-text center">520</p>
												</div>
											</div>
										</a>
									</div>

									<div class="row col s12 divider-form"></div>

									<div class="row">
										<div class="col m2">
											<h6>Legend</h6>
										</div>
										<div class="col m2">
											<div class="center" style="font-size:9pt">Available</div> 
											<div class="border-room"></div>
										</div>
										<div class="col m2">
											<div class="center" style="font-size:9pt">Non Available</div> 
											<div class="border-room" style="border-color: #f44336"></div>
										</div>
										<div class="col m2">
											<div class="center" style="font-size:9pt">Standar</div> 
											<div class="border-room" style="border-color: #e0e0e0; border-width:20px;"></div>
										</div>
										<div class="col m2">
											<div class="center" style="font-size:9pt">Superior</div> 
											<div class="border-room" style="border-color: #ff9800; border-width:20px;"></div>
										</div>
										<div class="col m2">
											<div class="center" style="font-size:9pt">Deluxe</div> 
											<div class="border-room" style="border-color: #ffeb3b; border-width:20px;"></div>
										</div>
									</div>

								</div>
								<!--End 5th Denah-->
								<!--////////////////////////////////////////////////////////////-->
							</div>
						</div>

					</div>
					<!--End Room Reservation-->
					<!--////////////////////////////////////////////////////////////-->

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
    <script src="material/pageloader/js/main.js"></script>

</body>
</html>