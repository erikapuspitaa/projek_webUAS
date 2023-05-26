<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use Illuminate\Http\Request;

class DokterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data_dokter = Dokter::select('id', 'Dokter_Name', 'Gender', 'Email_Address','Service', 'Phone_Number') ->paginate(10);
        return view('admin/data_dokter/index', compact('data_dokter'));
        //

        $data_dokter = Dokter::join('model_has_roles', 'users.id', '=', 'model_has_roles.model_id')
            ->where('role_id',3)
            ->select('id', 'name', 'email')
            ->paginate(10);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin/data_dokter/index');
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
