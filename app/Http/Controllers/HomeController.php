<?php

namespace App\Http\Controllers;
use App\Models\Member;
use App\Models\MemberModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function dashboard() {
        $data = MemberModel::get(); // Kirim data Member ke dashboard
        return view('home', compact('data'));
    }

    public function peserta(){
        $data = MemberModel::get(); // Kirim data Member ke dashboard
        return view('data-peserta', compact('data'));
    }


    public function index(Request $request){
        $keyword= $request->input('cari');
        $data = MemberModel:: where('nickname', 'like', "%".$keyword."%")->paginate(2);
        return view('data-peserta', compact('data'));
    }

    public function edit(Request $request, $id)
    {
        $data = MemberModel::find($id);

        return view('edit-peserta', compact('data')); // Kirim data ke view
    }



    public function instruktur(){
        return view('data-instruktur');
    }
    public function importdata_instruktur(){
        return view('importDataInstruktur');
    }
    public function data_event(){
        return view('data-event');
    }
    public function tambahdata_event(){
        return view('tambahDataEvent');
    }
}
