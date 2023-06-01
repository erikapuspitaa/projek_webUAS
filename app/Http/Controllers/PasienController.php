<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pasien;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class PasienController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index()
    {
        // $data_pasien = Pasien::select('id', 'Patient_Name', 'Gender', 'Email_Address','Service', 'Doctor', 'Phone_Number') ->latest()->simplePaginate(5);
         $data_pasien = Pasien::select('id', 'Patient_Name', 'Gender', 'Email_Address', 'Service', 'Doctor', 'Phone_Number')->latest()->simplePaginate(5);
         return view('admin/data_pasien/index', compact('data_pasien'));
        
         $data_pasien = Pasien::join('model_has_roles', 'users.id', '=', 'model_has_roles.model_id')
            ->where('role_id',2)
            ->select('id', 'Patient_Name', 'Gender', 'Email_Address', 'Service', 'Doctor', 'Phone_Number')
            ->paginate(5)
            ->get();
        
        

    }

    public function create()
    {
        return view('admin/data_pasien/create');

    }

    public function store(Request $request)
    {
        $request->validate([
            'Patient_Name' => 'required',
            'Gender' => 'required',
            'Email_Address' => 'required',
            'Service' => 'required',
            'Doctor' => 'required',
            'Phone_Number' => 'required',
        ]);

        Pasien::create([
            'Patient_Name' => $request-> Patient_Name,
            'Gender' => $request-> Gender,
            'Email_Address' => $request-> Email_Address,
            'Service' => $request-> Service,
            'Doctor' => $request-> Doctor,
            'Phone_Number' => $request-> Phone_Number,
        ]);

        Alert::success('Sukses', 'Data berhasil ditambahkan');
        return redirect('/data_pasien');
    }

    public function edit($id){
        $data_pasien = Pasien::select('id', 'Patient_Name', 'Gender', 'Email_Address','Service', 'Doctor', 'Phone_Number')->whereId($id)->first();
        return view('admin/data_pasien/edit', compact('data_pasien'));

        $data_pasien = Pasien::join('model_has_roles', 'users.id', '=', 'model_has_roles.model_id')
        ->where('role_id',2)
        ->select('id', 'Patient_Name', 'Gender', 'Email_Address', 'Service', 'Doctor', 'Phone_Number')
        ->paginate(10);
    }

    public function update(Request $request, $id){
        $request->validate([
            'Patient_Name' => 'required',
            'Gender' => 'required',
            'Email_Address' => 'required',
            'Service' => 'required',
            'Doctor' => 'required',
            'Phone_Number' => 'required',
        ]);
    

    Pasien::whereId($id)->update([
    'Patient_Name' => $request-> Patient_Name,
    'Gender' => $request-> Gender,
    'Email_Address' => $request-> Email_Address,
    'Service' => $request-> Service,
    'Doctor' => $request-> Doctor,
    'Phone_Number' => $request-> Phone_Number,
    ]);

    Alert::success('Sukses', 'Data berhasil diubah');
    return redirect('/data_pasien');
}

public function destroy(Request $request,$id){
    Pasien::whereId($id)->delete();

    Alert::success('Sukses', 'Data berhasil dihapus');
    return redirect('/data_pasien');
}

public function konfirmasi($id){
    alert()->question('Peringatan!','Anda yakin akan menghapus data ?')
    ->showConfirmButton('<a href="/data_pasien/' . $id . '/delete" class="text-white" style="text-decoration:none"> Hapus</a>', '#3085d6')->toHtml()
    ->showCancelButton('Batal', '#aaa')->reverseButtons();

    return redirect('/data_pasien');
}

public function delete($id){
    
    DB::table('model_has_roles')->where('model_id', $id)->delete();
    Pasien::whereId($id)->delete();

    Alert::success('Sukses', 'Data berhasil dihapus');
    return redirect('/data_pasien');

}

}
