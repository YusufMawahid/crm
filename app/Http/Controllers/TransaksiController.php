<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaksi;
use App\Transaksi2;
use App\User;
use Auth;


use Validator;
use Illuminate\Support\Facades\Input;
class TransaksiController extends Controller
{
    public function index()
    {
        $result = Transaksi::first();
        // $user = User::where('id', Auth::user()->id)->first();
        // return $user;
        return view('transaksi.index',['result'=>$result]);
    }

    public function index2()
    {
    	return view('transaksi.index2');
    }
    public function index3()
    {
        $user = User::where('id', Auth::user()->id)->first();
        $transaksi = Transaksi::where('user_id', Auth::user()->id)->first();
        $transaksi2 = Transaksi2::where('user_id', Auth::user()->id)->first();

        return view('transaksi.index3', [ 'user' => $user,
                                          'transaksi' => $transaksi,
                                          'transaksi2' => $transaksi2
                                           ]);
    }

    public function postStep1(Request $r)
    {
    	$new = new Transaksi();
        $new->user_id = Auth::user()->id;
        $new->lokasi = $r->lokasi;
        $new->spot = implode(', ', $r->spot);
        $new->tanggal = $r->tanggal;
        $new->sim = $r->sim;
        $new->save();


        return redirect('transaksi_2');
    }

    public function postStep2(Request $r)
    {
        $new = new Transaksi2;
        $new->user_id = Auth::user()->id;
        $new->pembayaran = $r->pembayaran;
        
          if(Input::hasFile('upload_pembayaran')){
            $upload_pembayaran = date("YmdHis")
            .uniqid()
            ."."
            .Input::file('upload_pembayaran')->getClientOriginalExtension();
        
            Input::file('upload_pembayaran')->move(public_path('bukti_pembayaran'),$upload_pembayaran);
            $new->upload_pembayaran = $upload_pembayaran;
            }

        $new->save();
        return redirect('transaksi_3');
    }
    public function delete_transaksi()
    {
        $user = User::where('id', Auth::user()->id)->firstOrFail();
        Transaksi::where('user_id', $user->id)->delete();
        Transaksi2::where('user_id', $user->id)->delete();

        return redirect('transaksi');
    }
}
