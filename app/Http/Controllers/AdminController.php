<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data_admin = Admin::select('id', 'Admin_Name', 'Gender', 'Email_Address', 'Phone_Number') ->paginate(10);
        return view('admin/data_admin/index', compact('data_admin'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin/data_admin/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'Admin_Name' => 'required',
            'Gender' => 'required',
            'Email_Address' => 'required',
            'Phone_Number' => 'required',
        ]);

        Admin::create([
            'Admin_Name' => $request-> Admin_Name,
            'Gender' => $request-> Gender,
            'Email_Address' => $request-> Email_Address,
            'Phone_Number' => $request-> Phone_Number,
        ]);

        Alert::success('Sukses', 'Data berhasil ditambahkan');
        return redirect('/data_admin');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
