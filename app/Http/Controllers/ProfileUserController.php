<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProfileUser;

class ProfileUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $profile_user = ProfileUser::select('id', 'Nama', 'Email', 'Alamat', 'Pekerjaan', 'Keluhan');
        return view('user/profile_user/index', compact('profile_user'));
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
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
