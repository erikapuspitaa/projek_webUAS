<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class DokterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data_dokter = Dokter::select('id','Photo', 'Dokter_Name', 'Gender', 'Email_Address','Service', 'Phone_Number') ->paginate(10);
        return view('admin/data_dokter/index', compact('data_dokter'));
        //

        // $data_dokter = Dokter::join('model_has_roles', 'users.id', '=', 'model_has_roles.model_id')
        //     ->where('role_id',3)
        //     ->select('id', 'Dokter_Name', 'Gender', 'Email_Address','Service', 'Phone_Number')
        //     ->paginate(10);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin/data_dokter/create');
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'Photo' => 'required|mimes:jpg,bmp,png,jpeg',
            'Dokter_Name' => 'required',
            'Gender' => 'required',
            'Email_Address' => 'required',
            'Service' => 'required',
            'Phone_Number' => 'required',
        ]);

        $Photo = time() . '-'. $request->Photo->getClientOriginalName();
        $request->Photo->move('upload/data_dokter', $Photo);

        Dokter::create([
            'Photo' => $Photo,
            'Dokter_Name' => $request-> Dokter_Name,
            'Gender' => $request-> Gender,
            'Email_Address' => $request-> Email_Address,
            'Service' => $request-> Service,
            'Phone_Number' => $request-> Phone_Number,
        ]);

        Alert::success('Sukses', 'Data berhasil ditambahkan');
        return redirect('/data_dokter');
    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
        $data_dokter = Dokter::select('id', 'Photo', 'Dokter_Name', 'Gender', 'Email_Address','Service', 'Phone_Number')->whereId($id)->firstOrFail();
        return view('admin/data_dokter/show',compact('data_dokter'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data_dokter = Dokter::select('id', 'Photo', 'Dokter_Name', 'Gender', 'Email_Address','Service', 'Phone_Number')->whereId($id)->firstOrFail();
        return view('admin/data_dokter/edit',compact('data_dokter'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'Photo' => 'mimes:jpg,bmp,png,jpeg',
            'Dokter_Name' => 'required',
            'Gender' => 'required',
            'Email_Address' => 'required',
            'Service' => 'required',
            'Phone_Number' => 'required',
        ]);

        $data = [
            'Dokter_Name' => $request-> Dokter_Name,
            'Gender' => $request-> Gender,
            'Email_Address' => $request-> Email_Address,
            'Service' => $request-> Service,
            'Phone_Number' => $request-> Phone_Number,
        ];

        $data_dokter = Dokter::select('Photo', 'id')->whereId($id)->first();
        if($request->Photo){
            File::delete('/upload/data_dokter/' . $data_dokter->Photo);

            $Photo = time() . '-'. $request->Photo->getClientOriginalName();
            $request->Photo->move('upload/data_dokter', $Photo);

            $data['Photo'] = $Photo;
        }
        
        $data_dokter->update($data);
        Alert::success('Sukses', 'Data berhasil diubah');
        return redirect('/data_dokter');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, $id){

        $data_dokter = Dokter::select('Photo', 'id')->whereId($id)->first();
        File::delete('/upload/data_dokter/' . $data_dokter->Photo);
        $data_dokter->update();
    //Dokter::whereId($id)->delete();

    Alert::success('Sukses', 'Data berhasil dihapus');
    return redirect('/data_dokter');
}

public function konfirmasi($id){
    alert()->question('Peringatan!','Anda yakin akan menghapus data ?')
    ->showConfirmButton('<a href="/data_dokter/' . $id . '/delete" class="text-white" style="text-decoration:none"> Hapus</a>', '#3085d6')->toHtml()
    ->showCancelButton('Batal', '#aaa')->reverseButtons();

    return redirect('/data_dokter');
}
public function delete($id){
    
    DB::table('model_has_roles')->where('model_id', $id)->delete();
    Dokter::whereId($id)->delete();

    Alert::success('Sukses', 'Data berhasil dihapus');
    return redirect('/data_dokter');

}
}

