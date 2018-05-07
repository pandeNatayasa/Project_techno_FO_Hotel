<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tb_pemesanans;
use DB;
use Auth;
use App\tb_tamus;
use App\tb_detail_inventoris;
use App\tb_detail_kamars;
use App\tb_detail_menus;
use App\tb_detail_services;
use App\tb_inventoris;
use App\tb_jenis_kamars;
use App\tb_kamars;
use App\tb_menus;
use App\tb_pegawais;
use App\tb_services;
use App\users;
use App\tb_detail_pemesanans;
use PropertyHelper;

class controller2 extends Controller
{
    public function editProfile(){
    	return view('edit-profile');
    }

    public function index(){
    	return view('index');
    }
    public function payment(){
    	return view('payment-method');
    }
    public function checkInDetail(){
    	return view('check-in-detail');
    }
    public function roomView(){
    	return view('room-view');
    }
     public function toiletView(){
    	return view('toilet-view');
    }
}
