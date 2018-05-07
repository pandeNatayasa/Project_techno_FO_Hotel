<!DOCTYPE html>
<html>
<head>
	<title>Check-In | Front Office</title>
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

		<!--Start Drop Down-->
    	<ul id="dropdown1" class="dropdown-content">
            <li><a href="#" class="black-text"><i class="material-icons black-text">person_outline</i>Profile</a>
            </li>
            <li class="divider"></li>
            <li><a href="/project1/public/signUp" class="black-text"><i class="small material-icons black-text">add_circle_outline</i>SignUp</a>
            </li>
            <li class="divider"></li>
            <li><a class="black-text modal-trigger" data-target="modal1" href=""><i class="material-icons black-text">exit_to_app</i>Logout</a>
            </li>
        </ul>
        <!--End Drop Down-->
        <!--////////////////////////////////////////////////////////////-->

        <!--Start Drop Down 2-->
    	<ul id="dropdown2" class="dropdown-content">
             <li><a href="#" class="black-text"><i class="material-icons black-text">person_outline</i>Profile</a>
            </li>
            <li class="divider"></li>
           <li><a href="/project1/public/signUp" class="black-text"><i class="small material-icons black-text">add_circle_outline</i>SignUp</a>
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
				<a href="" class="brand-logo"><img class="hide-on-large-only" src="{{asset('material/images/logo-nav.png')}}"></a>
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
						<img src="{{asset('material/images/logo-left-nav.png')}}" style="width:100%">
					</li>
					<li class="user-profile hide-on-med-and-down" style="margin-bottom:20px">
						<div class="row">
                    		<div class="col m2">
								<div class="col s12 center">
									<a href="#!user"><img class="circle" src="{{asset('material/images/surya-inn.jpg')}}"></a>
								</div>
							</div>
							<div class="col m10">
								<div class="col s12 center">
									<p class="name">John Doe</p>
								</div>
							</div>
                		</div>
					</li>
      				<li class="white-text"><a class="white-text" href="/project1/public/dashboard"><i class="material-icons white-text">dashboard</i> Dashboard</a></li>
      				<li><a class="white-text" href="/project1/public/roomReservation"><i class="material-icons white-text">hotel</i> Room Reservation</a></li>
      				<li><a class="white-text active-li" href="/project1/public/checkIn"><i class="material-icons white-text">person_pin</i>Check In</a></li>
      				<li><a class="white-text" href="/project1/public/checkOut"><i class="material-icons white-text">insert_invitation</i>Check Out</a></li>
      				<li><a class="white-text" href="/project1/public/roomService"><i class="material-icons white-text">room_service</i>Room Service</a></li>
      				<li class="hide-on-large-only"> 
      					<div class="divider"></div>
      					<div class="user-view row">
      						<div class="col m2">
								<div class="col s12 center">
									<a href="#!user"><img class="circle" src="{{asset('material/images/surya-inn.jpg')}}"></a>
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
					<div class="row">

						<!--Start Check In Detail-->
						<div class="col s12 m12 l7 white">
							<div class="row">
								<form class="col s12">
									<div class="row">
										<h5 class="center header-color-text">Check In Detail</h5>
									</div>
									<div class="divider"></div>
									<br>
									<div class="row">
										<div class="input-field col s9">
											@if($tamu != null)
											 <input id="fullName" type="text" class="validate"  value="{{ $tamu->nama_panggilan }}" >
											 <label for="fullName">Full Name </label>
											@elseif($tamu == null)
											 <input id="fullName" type="text" class="validate" >
											 <label for="fullName">Full Name </label>
											@else
											 <input id="fullName" type="text" class="validate" >
											 <label for="fullName">Full Name </label>
											@endif
										</div>
										<p class="col s3">
											@if($tamu !=null)
											<input type="checkbox" id="fullName1" checked="checked">
											<label for="fullName1">Valid</label>
											@elseif($tamu == null)
											<input type="checkbox" id="fullName1">
											<label for="fullName1">Valid</label>
											@else
											<input type="checkbox" id="fullName1">
											<label for="fullName1">Valid</label>
											@endif
										</p>
									</div>
									<div class="row">
										<div class="input-field col s9">
											@if($tamu != null)
											 <input id="idNumber" type="text" class="validate"  value="{{ $tamu->no_identitas }}"  >
											 <label for="idNumber">Id Number</label>
											@elseif($tamu == null)
											 <input id="idNumber" type="text" class="validate" >
											 <label for="idNumber">Id Number</label>
											@else
											 <input id="idNumber" type="text" class="validate" >
											 <label for="idNumber">Id Number</label>
											 @endif
										</div>
										<p class="col s3">
											@if($tamu !=null)
											<input type="checkbox" id="idNumber1" checked="checked">
											<label for="idNumber1">Valid</label>
											@elseif($tamu == null)
											<input type="checkbox" id="idNumber1">
											<label for="idNumber1">Valid</label>
											@else
											<input type="checkbox" id="idNumber1">
											<label for="idNumber1">Valid</label>
											@endif
										</p>
									</div>
									<div class="row">
										<div class="input-field col s9">
											@if($tamu != null)
											 <input id="gender" type="text" class="validate"  value="{{ $tamu->jenis_kelamin }}" >
											 <label for="gender">Gender</label>
											@elseif($tamu == null)
											 <input id="gender" type="text" class="validate">
											 <label for="gender">Gender</label>
											@else
											 <input id="gender" type="text" class="validate">
											 <label for="gender">Gender</label>
											@endif
										</div>
										<p class="col s3">
											@if($tamu !=null)
											<input type="checkbox" id="gender1" checked="checked">
											<label for="gender1">Valid</label>
											@elseif($tamu == null)
											<input type="checkbox" id="gender1">
											<label for="gender1">Valid</label>
											@else
											<input type="checkbox" id="gender1">
											<label for="gender1">Valid</label>
											@endif
										</p>
									</div>
									<div class="row">
										<div class="input-field col s9">
											@if($tamu != null)
											 <input id="birthday" type="text" class="validate"  value="{{ $tamu->tanggal_lahir }}" >
											 <label for="birthday">Birthday</label>
											@elseif($tamu == null)
											 <input id="birthday" type="text" class="validate">
											 <label for="birthday">Birthday</label>
											@else
											 <input id="birthday" type="text" class="validate">
											 <label for="birthday">Birthday</label>
											@endif
										</div>
										<p class="col s3">
											@if($tamu !=null)
											<input type="checkbox" id="birthday1" checked="checked">
											<label for="birthday1">Valid</label>
											@elseif($tamu == null)
											<input type="checkbox" id="birthday1">
											<label for="birthday1">Valid</label>
											@else
											<input type="checkbox" id="birthday1">
											<label for="birthday1">Valid</label>
											@endif
										</p>
									</div>
									<div class="row">
										<div class="input-field col s9">
											@if($tamu !=null)
											 <input id="roomType" type="text" class="validate"  value="{{ $tamu->jenis_kamar }}"  >
											 <label for="roomType">Room Type</label>
											@else
											 <input id="roomType" type="text" class="validate">
											 <label for="roomType">Room Type</label>
											 @endif
										</div>
										<p class="col s3">
											@if($tamu !=null)
											<input type="checkbox" id="roomType1" checked="checked">
											<label for="roomType1">Valid</label>
											@else
											<input type="checkbox" id="roomType1">
											<label for="roomType1">Valid</label>
											@endif
										</p>
									</div>
									<div class="row">
										<div class="input-field col s9">
											 <input id="stayTime" type="text" class="validate">
											 <label for="stayTime">Stay Time</label>
										</div>
										<p class="col s3">
											@if($tamu !=null)
											<input type="checkbox" id="stayTime1" checked="checked">
											<label for="stayTime1">Valid</label>
											@else
											<input type="checkbox" id="stayTime1">
											<label for="stayTime1">Valid</label>
											@endif
										</p>
									</div>
									<div class="row">
										<div class="input-field col s9">
											@if($tamu !=null)
											 <input id="addService" type="text" class="validate" value="{{ $tamu->jenis_service}}">
											 <label for="addService">Add Service</label>
											@else
											 <input id="addService" type="text" class="validate">
											 <label for="addService">Add Service</label>
											@endif
										</div>
										<p class="col s3">
											@if($tamu !=null)
											<input type="checkbox" id="addService1" checked="checked">
											<label for="addService1">Valid</label>
											@else
											<input type="checkbox" id="addService1">
											<label for="addService1">Valid</label>
											@endif
										</p>
									</div>
								</form>

								<div class="row">
									<form class="col s12">
										<div class="row">
											<div class="input-field col s12">
												 <input id="totalPrice" type="text" class="validate">
												 <label for="totalPrice">Total Price</label>
											</div>
										</div>
										<div class="row">
											<div class="input-field col s12">
												 <input id="status" type="text" class="validate">
												 <label for="status">Status</label>
											</div>
										</div>
									</form>
								</div>

							</div>
						</div>
						<!--End Check In Detail-->
						<!--////////////////////////////////////////////////////////////-->

						<!--Start ID Booking Input-->
						<div class="col s12 m12 l5 white border-left hide-border-on-med-and-down">
							<div class="divider-form hide-on-large-only"></div>
							<div class="row">
								<form class="col s12" action="/project1/public/checkIn">
									<div class="row">
										<h5 class="center header-color-text">For Check In, Input Your Guest Booking ID</h5>
									</div>
									<div class="divider"></div>
									<br>
									<div class="row">
										<div class="input-field col s12">
											<input id="idBooking" type="text" class="validate">
											<label for="idBooking">ID Booking</label>
										</div>
									</div>
									<div class="row col s12 center">
										<button class="btn waves-effect waves-light side-nav-background" type="submit" name="action">Submit<i class="material-icons right">send</i>
										</button>  
									</div>
								</form>
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
	<script type="text/javascript" src="{{asset('material/materialize/js/materialize.min.js')}}"></script>
	<script type="text/javascript">
    	// Initialize collapse button
  		$(".button-collapse").sideNav();
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
    </script>

</body>
</html>