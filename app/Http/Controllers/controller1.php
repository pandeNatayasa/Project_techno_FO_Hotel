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

class controller1 extends Controller
{
    function signUp(){
    	return view('sign-up');
    }

    function roomService(){
    	return view('room-service');
    }

    function roomServiceDetail(Request $request){
    	$roomNumber = $request -> roomNumber;
    	return view('room-service-detail')
    	->with('roomNumber',$roomNumber);
    }

    function resetPassword(){
    	return view('reset-password');
    }

    function home(){
    	return view('index');
    }

    function dashboard(){
        $tgl=date('Y-m-d');
        $tgl2=date('Y-m-d');
        $no=1;
        $no2=1;
        $checkInToday= DB::select("CALL check_in_today('$tgl2')");
        $checkOutToday= DB::select("CALL check_out_today('$tgl')");
        $roomAvailable= DB::select("CALL roomAvailable()");
        //tb_pemesanans::where("DATE_FORMAT(tb_pemesanans.tanggal_chekin,\'%Y-%m-%d\'",'=',$tgl); //all();
        //return ($tgl);
    	return view('dashboard',compact('checkInToday','no','checkOutToday','no2','roomAvailable'));
    }

    function checkOut(){
    	return view('check-out');
    }

    function roomReservation(){
        return view('room-reservation');
    }

    function checkOutDetail(Request $request){
        $id = $request -> room;
        //$id= $noK['no_kamar'];
        $no=1;
        $dataService=DB::table('tb_detail_services')
        ->join('tb_services','tb_detail_services.id_service','=','tb_services.id_service')
        ->select('tb_detail_services.jumlah_service','tb_detail_services.harga_satuan','tb_services.jenis_service')
        ->get();

        $hargaKamar=DB::table('tb_kamars')
        ->join('tb_jenis_kamars','tb_kamars.id_jenis_kamar','=','tb_jenis_kamars.id_jenis_kamar')
        ->select('tb_kamars.harga_kamar','tb_jenis_kamars.jenis_kamar','tb_kamars.nomor_kamar')
        ->where('tb_kamars.nomor_kamar','=',$id)
        ->get()
        ->first();

        $dataKamar=DB::table('tb_inventoris')
        ->join('tb_detail_kamars','tb_detail_kamars.id_inventori','=','tb_inventoris.id_inventori')
        ->join('tb_kamars','tb_detail_kamars.id_kamar','=','tb_kamars.id_kamar')
        ->select('tb_inventoris.nama_barang')
        ->where('tb_kamars.nomor_kamar','=',$id)
        ->get();

        //$dataKamar= DB::select("CALL queryIdKamar($id);");
        return view('check-out-detail',compact('dataKamar','dataService','no','hargaKamar'));
        //return($id.' aku');
    }

    function checkOutDetailNew($id){
        
        $no=1;
        /*$dataKamar=DB::table('tb_inventoris')
        ->join('tb_detail_kamars','tb_inventoris.id_inventori','=','tb_detail_kamars.id_inventori')
        ->select('tb_inventoris.nama_barang')
        ->where('tb_detail_kamars.id_kamar','=',$id)
        ->get();*/
        $dataService=DB::table('tb_detail_services')
        ->join('tb_services','tb_detail_services.id_service','=','tb_services.id_service')
        ->join('tb_detail_pemesanans','tb_detail_pemesanans.id_pemesanan','=','tb_detail_services.id_pemesanan')
        ->join('tb_kamars','tb_detail_pemesanans.id_kamar','=','tb_kamars.id_kamar')
        ->select('tb_detail_services.jumlah_service','tb_detail_services.harga_satuan','tb_services.jenis_service')
        ->where('tb_kamars.nomor_kamar','=',$id)
        ->get();

        $hargaKamar=DB::table('tb_kamars')
        ->join('tb_jenis_kamars','tb_kamars.id_jenis_kamar','=','tb_jenis_kamars.id_jenis_kamar')
        ->select('tb_kamars.harga_kamar','tb_jenis_kamars.jenis_kamar','tb_kamars.nomor_kamar')
        ->where('tb_kamars.nomor_kamar','=',$id)
        ->get()
        ->first();

        $dataKamar= DB::select("CALL queryIdKamar($id);");
        return view('check-out-detail',compact('dataKamar','dataService','no','hargaKamar'));
    }


    function checkIn(){

        $tamu=DB::table('tb_pemesanans')
        ->join('tb_tamus','tb_tamus.id_tamu','=','tb_pemesanans.id_tamu')
        ->join('tb_detail_services','tb_pemesanans.id_pemesanan','=','tb_detail_services.id_pemesanan')
        ->join('tb_detail_pemesanans','tb_pemesanans.id_pemesanan','=','tb_detail_pemesanans.id_pemesanan')
        ->join('tb_kamars','tb_detail_pemesanans.id_kamar','=','tb_kamars.id_kamar')
        ->join('tb_jenis_kamars','tb_jenis_kamars.id_jenis_kamar','=','tb_kamars.id_jenis_kamar')
        ->join('tb_services','tb_detail_services.id_service','=','tb_services.id_service')
        ->select('tb_tamus.id_tamu','tb_tamus.nama_panggilan','tb_tamus.jenis_kelamin','tb_tamus.no_identitas','tb_tamus.tanggal_lahir','tb_detail_pemesanans.id_kamar','tb_detail_services.harga_satuan','tb_jenis_kamars.jenis_kamar','tb_services.jenis_service')
        ->where('tb_pemesanans.id_pemesanan','=','0')
        ->get()
        ->first();
    	return view('check-in',compact('tamu'));
    }

    function checkInNew($id){
        $tamu=DB::table('tb_pemesanans')
        ->join('tb_tamus','tb_tamus.id_tamu','=','tb_pemesanans.id_tamu')
        ->join('tb_detail_services','tb_pemesanans.id_pemesanan','=','tb_detail_services.id_pemesanan')
        ->join('tb_detail_pemesanans','tb_pemesanans.id_pemesanan','=','tb_detail_pemesanans.id_pemesanan')
        ->join('tb_kamars','tb_detail_pemesanans.id_kamar','=','tb_kamars.id_kamar')
        ->join('tb_jenis_kamars','tb_jenis_kamars.id_jenis_kamar','=','tb_kamars.id_jenis_kamar')
        ->join('tb_services','tb_detail_services.id_service','=','tb_services.id_service')
        ->select('tb_tamus.id_tamu','tb_tamus.nama_panggilan','tb_tamus.jenis_kelamin','tb_tamus.no_identitas','tb_tamus.tanggal_lahir','tb_detail_pemesanans.id_kamar','tb_detail_services.harga_satuan','tb_jenis_kamars.jenis_kamar','tb_services.jenis_service')
        ->where('tb_pemesanans.id_pemesanan','=',$id)
        ->get()
        ->first();
        //$tamu=tb_tamus::where('id_tamu','=',$id)->first();
        
        try{
            if (!empty($tamu)) {
                return view('check-in-detail',compact('tamu'));
            }else{
                return('Data Kosong');
            }
        }
        catch(\Exception $ex){
            dd($ex->getMessage());
        }
    }

    public function loginAdmin(Request $request){

        $this->validate($request,[
                'username' => 'required',
                'password' => 'required'
            ]);
        $username1 = $request-> username;
        $password1 = $request-> password;

        $usernameSalah='';
        $passwordSalah='';
        
        $cekUsername=DB::table('tb_pegawais')
        ->select('tb_pegawais.username')
        ->where('tb_pegawais.username','=',$username1)
        ->get();
        $cekPassword=DB::table('tb_pegawais')
        ->select('tb_pegawais.password')
        ->where('tb_pegawais.password','=',$password1)
        ->get();
        $array = array('username' => $cekUsername,'password' => $cekPassword );
//Auth::attempt(array('user' => $cekUsername,'pass' => $cekPassword ), true)
//Auth::attempt(array('user' => $cekUsername,'pass' => $cekPassword ), true)
        if(Auth::attempt($array)){
            if(Auth::attempt($array)){
                $tgl=date('Y-m-d');
                $tgl2=date('Y-m-d');
                $no=1;
                $no2=1;
                $checkInToday= DB::select("CALL check_in_today('$tgl2')");
                $checkOutToday= DB::select("CALL check_out_today('$tgl')");
                $roomAvailable= DB::select("CALL roomAvailable()");
                //tb_pemesanans::where("DATE_FORMAT(tb_pemesanans.tanggal_chekin,\'%Y-%m-%d\'",'=',$tgl); //all();
                //return ($tgl);
                return view('dashboard',compact('checkInToday','no','checkOutToday','no2','roomAvailable'));
            }else{
                $passwordSalah='Maaf, Password anda salah';
                return view('index',compact('usernameSalah','passwordSalah'));
            }
        }else{
            $usernameSalah='Maaf, Username anda salah'; 
            return view('index',compact('usernameSalah','passwordSalah'));
        }
    }
    public function login(){
        $usernameSalah='';
        $passwordSalah='';
        return view('index',compact('usernameSalah','passwordSalah'));
    }
}
