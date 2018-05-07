<!DOCTYPE html>
<html>
<head>
	<title>Check-Out Detail | Front Office</title>
	<!--import link icon-->
	<link rel="icon" href="{{asset('material/images/logo-32x32.png')}}">
	<!--Import Google Icon Font-->
	<!--link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"-->
	<link href="{{asset('material/material-design-icons/css/material-icons.css')}}" rel="stylesheet">
	<!--Import materialize.css-->
	<link type="text/css" rel="stylesheet" href="{{asset('material/materialize/css/materialize.min.css')}}"  media="screen,projection"/>
	<!--Import Custom CSS-->
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
      				<li><a class="white-text" href="/project1/public/checkIn"><i class="material-icons white-text">person_pin</i>Check In</a></li>
      				<li><a class="white-text active-li" href="/project1/public/checkOut"><i class="material-icons white-text">insert_invitation</i>Check Out</a></li>
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
					<div class="row white" style="padding-bottom:20px;">

						<!--Start Header Content-->
						<div class="col s12 m12 l12">
							<div class="row">
								<h4 class="header-color-text center" style="padding-top:5px">Check Out</h4>
							</div>
							<div class="divider"></div>
						</div>
						<!--End Header Content-->
						<!--////////////////////////////////////////////////////////////-->

						<!--Start Check Out Detail-->
						<div class="col s12 m12 l6 border-right-table hide-border-on-med-and-down">
							<div class="row">
								<form class="col s12">
									<div style="padding-top:10px">
									
										<pre><h6 class="header-color-text">Room Number	: {{$hargaKamar->nomor_kamar}}</h6></pre>
										<pre><h6 class="header-color-text">Room Type		: {{$hargaKamar->jenis_kamar}}</h6></pre>
									
									</div>
									<div class="row">
										<div class="col l6">
											<p>Room</p>
											<p>
												<?php $i=0; // $jumlah=count($dataKamar) ?>
												@foreach($dataKamar as $data)
												@if( $data->nama_barang == "Bed(2 Queen-size)" )
													<input type="checkbox" id="bed" checked="checked">
													<label class="label-font" for="bed">Bed (2 Queen-size)</label>
													<?php $i=2 ?>
												@elseif($i==2)
													<?php $i=2 ?>
												@else
													<?php $i=1?>
												@endif
												@endforeach
												@if($i==1)
													<input type="checkbox" id="bed" >
													<label class="label-font" for="bed">Bed (2 Queen-size)</label>
												@endif
											</p>
											<p>
												<?php $i=0; // $jumlah=count($dataKamar) ?>
												@foreach($dataKamar as $data)
												@if( $data->nama_barang == "Size(3 X 4)" )
													<input type="checkbox" id="size" checked="checked">
													<label class="label-font" for="size">Size (3 x 4)</label>
												<?php $i=2 ?>
												@elseif($i==2)
													<?php $i=2 ?>
												@else
													<?php $i=1?>
												@endif
												@endforeach
												@if($i==1)
													<input type="checkbox" id="size">
													<label class="label-font" for="size">Size (3 x 4)</label>
												@endif
											</p>
											<p>

											<p>
												<?php $i=0; // $jumlah=count($dataKamar) ?>
												@foreach($dataKamar as $data)
												@if( $data->nama_barang == "Sofa" )
													<input type="checkbox" id="sofa" checked="checked">
													<label class="label-font" for="sofa">Sofa</label>
												<?php $i=2 ?>
												@elseif($i==2)
													<?php $i=2 ?>
												@else
													<?php $i=1?>
												@endif
												@endforeach
												@if($i==1)
													<input type="checkbox" id="sofa">
													<label class="label-font" for="sofa">Sofa</label>
												@endif
											</p>
											<p>
												<?php $i=0; // $jumlah=count($dataKamar) ?>
												@foreach($dataKamar as $data)
													@if( $data->nama_barang == "Table" )
														<input type="checkbox" id="table" checked="checked">
														<label class="label-font" for="table">Table</label>
													<?php $i=2 ?>
													@elseif($i==2)
														<?php $i=2 ?>
													@else
														<?php $i=1?>
													@endif
												@endforeach
												@if($i==1)
													<input type="checkbox" id="table">
													<label class="label-font" for="table">Table</label>
												@endif
											</p>
											<p>
												<?php $i=0; // $jumlah=count($dataKamar) ?>
												@foreach($dataKamar as $data)
													@if( $data->nama_barang == "TV" )
														<input type="checkbox" id="tv" checked="checked">
														<label class="label-font" for="tv">TV</label>
													<?php $i=2 ?>
													@elseif($i==2)
														<?php $i=2 ?>
													@else
														<?php $i=1?>
													@endif
												@endforeach
												@if($i==1)
													<input type="checkbox" id="tv">
													<label class="label-font" for="tv">TV</label>
												@endif
											</p>
											<p>
												<?php $i=0; // $jumlah=count($dataKamar) ?>
												@foreach($dataKamar as $data)
													@if( $data->nama_barang == "Water Heater" )
														<input type="checkbox" id="waterHeater" checked="checked">
														<label class="label-font" for="waterHeater">Water Heater</label>
														<?php $i=2 ?>
													@elseif($i==2)
														<?php $i=2 ?>
													@else
														<?php $i=1?>
													@endif
												@endforeach
												@if($i==1)
													<input type="checkbox" id="waterHeater">
													<label class="label-font" for="waterHeater">Water Heater</label>

												@endif
											</p>
											<p>
												<?php $i=0; // $jumlah=count($dataKamar) ?>
												@foreach($dataKamar as $data)
													@if( $data->nama_barang == "Cupboard" )
														<input type="checkbox" id="cupboard" checked="checked">
														<label class="label-font" for="cupboard">Cupboard</label>
														<?php $i=2 ?>
													@elseif($i==2)
														<?php $i=2 ?>
													@else
														<?php $i=1?>
													@endif
												@endforeach
												@if($i==1)
													<input type="checkbox" id="cupboard">
													<label class="label-font" for="cupboard">Cupboard</label>
												@endif
											</p>
											<p>
												<?php $i=0; // $jumlah=count($dataKamar) ?>
												@foreach($dataKamar as $data)
													@if( $data->nama_barang == "Brankas" )
														<input type="checkbox" id="brankas" checked="checked">
														<label class="label-font" for="brankas">Brankas</label>
														<?php $i=2 ?>
													@elseif($i==2)
														<?php $i=2 ?>
													@else
														<?php $i=1?>
													@endif
												@endforeach
												@if($i==1)
													<input type="checkbox" id="brankas">
													<label class="label-font" for="brankas">Brankas</label>
												@endif
											</p>
											<p>
												<?php $i=0; // $jumlah=count($dataKamar) ?>
												@foreach($dataKamar as $data)
													@if( $data->nama_barang == "Windows" )
														<input type="checkbox" id="windows" checked="checked">
														<label class="label-font" for="windows">Windows</label>
														<?php $i=2 ?>
													@elseif($i==2)
														<?php $i=2 ?>
													@else
														<?php $i=1?>
													@endif
												@endforeach
												@if($i==1)
													<input type="checkbox" id="windows">
													<label class="label-font" for="windows">Windows</label>
												@endif
											</p>
										</div>
										<div class="col l6">
											<p>Toilet</p>
											<p>
												<?php $i=0; // $jumlah=count($dataKamar) ?>
												@foreach($dataKamar as $data)
													@if( $data->nama_barang == "Shower" )
														<input type="checkbox" id="shower" checked="checked">
														<label class="label-font" for="shower">Shower</label>
														<?php $i=2 ?>
													@elseif($i==2)
														<?php $i=2 ?>
													@else
														<?php $i=1?>
													@endif
												@endforeach
												@if($i==1)
													<input type="checkbox" id="shower">
													<label class="label-font" for="shower">Shower</label>
												@endif
											</p>
											<p>
												<?php $i=0; // $jumlah=count($dataKamar) ?>
												@foreach($dataKamar as $data)
													@if( $data->nama_barang == "Bathup" )
														<input type="checkbox" id="bathup" checked="checked">
														<label class="label-font" for="bathup">Bathup</label>
														<?php $i=2 ?>
													@elseif($i==2)
														<?php $i=2 ?>
													@else
														<?php $i=1?>
													@endif
												@endforeach
												@if($i==1)
													<input type="checkbox" id="bathup">
													<label class="label-font" for="bathup">Bathup</label>
												@endif
											</p>
											<p>
												<?php $i=0; // $jumlah=count($dataKamar) ?>
												@foreach($dataKamar as $data)
													@if( $data->nama_barang == "Wastafel" )
														<input type="checkbox" id="wastafel" checked="checked">
														<label class="label-font" for="wastafel">Wastafel</label>
														<?php $i=2 ?>
													@elseif($i==2)
														<?php $i=2 ?>
													@else
														<?php $i=1?>
													@endif
												@endforeach
												@if($i==1)
													<input type="checkbox" id="wastafel">
													<label class="label-font" for="wastafel">Wastafel</label>
												@endif
											</p>
											<p>
												<?php $i=0; // $jumlah=count($dataKamar) ?>
												@foreach($dataKamar as $data)
													@if( $data->nama_barang == "Water Closet" )
														<input type="checkbox" id="waterCloset" checked="checked">
														<label class="label-font" for="waterCloset">Water Closet</label>
														<?php $i=2 ?>
													@elseif($i==2)
														<?php $i=2 ?>
													@else
														<?php $i=1?>
													@endif
												@endforeach
												@if($i==1)
													<input type="checkbox" id="waterCloset">
													<label class="label-font" for="waterCloset">Water Closet</label>
												@endif
											</p>
										</div>
									</div>
									<div class="divider"></div>
									<pre class="col s12"><p>Price	: Rp {{$hargaKamar->harga_kamar}},00</p></pre>
								</form>
							</div>
						</div>
						<!--End Check Out Detail-->
						<!--////////////////////////////////////////////////////////////-->

						<!--Start Room Service Check Out-->
						<div class="col s12 m12 l6">
							<div class="divider-form hide-on-large-only"></div>
							<div class="row col s12" style="padding-top:10px">
								<h6 class="header-color-text">Room Service</h6>
							</div>
							<div class="row">
								<table>
									<tr class="border-top-table">
										<td class="border-right-table">No</td>
										<td class="border-right-table">Name</td>
										<td class="border-right-table">Qty</td>
										<td>Price</td>
									</tr>
									<?php $total=0; ?>
									@foreach($dataService as $data)
										<tr>
											<td class="border-right-table">{{$no++}}</td>
											<td class="border-right-table">{{$data->jenis_service}}</td>
											<td class="border-right-table">{{$data->jumlah_service}}</td>
											<?php 
												$jumlah=$data->jumlah_service; 
												$harga=$data->harga_satuan;
												$hargaService=$jumlah*$harga;
											?>
											<td>{{$hargaService}}</td>	
										</tr>
										
										<?php $total=$total+$hargaService; ?>
									@endforeach
									<?php $hargakamar=$hargaKamar->harga_kamar; ?>
									<?php $totalharga=$total+$hargakamar ?>
									<?php $pajak=0.1 * $totalharga; ?>
									<?php $totalSemuaHarga=$totalharga+$pajak;?>
								</table>
								<div class="col s12 right-align border-top-table" style="padding-top:5px">Tax 10%	: Rp {{$pajak}},00-</div>
								<p class="col s12 border-top-table"><h5 class="center header-color-text ">Total	: Rp {{$totalSemuaHarga}},00-</h5></p>
								<a href="/project1/public/paymentMethod" class="btn waves-effect waves-light side-nav-background col s12" type="submit" name="action">Clear</a>
							</div>
						</div>
						<!--End Room Service Check Out-->
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