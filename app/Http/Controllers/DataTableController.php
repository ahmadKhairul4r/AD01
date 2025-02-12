<?php

namespace App\Http\Controllers;
use App\Models\Member;
use App\Models\MemberModel;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class DataTableController extends Controller
{

    public function clientSide(Request $request)
    {
        $data = new MemberModel;

        if ($request->get('search')) {
            $data = $data->where('fullname', 'LIKE', '%' . $request->get('search') . '%')
                ->orWhere('nik', 'LIKE', '%' . $request->get('search') . '%');
        }

        $data = $data->get();

        if ($request->ajax()) {
            return view('data_peserta_tbody.blade', compact('data')); // Mengembalikan hanya baris tabel
        }
        return view('datatable.clientside', compact('data', 'request'));
    }

    public function serverSide(Request $request)
    {
        $data = new MemberModel;

        if ($request->get('search')) {
            $data = $data->where('fullname', 'LIKE', '%' . $request->get('search') . '%')
                ->orWhere('nik', 'LIKE', '%' . $request->get('search') . '%');
        }

        $data = $data->get();

        if ($request->ajax()) {
            return view('data_peserta_tbody.blade', compact('data')); // Mengembalikan hanya baris tabel
        }
        return view('data-peserta', compact('data', 'request'));
    }


}
