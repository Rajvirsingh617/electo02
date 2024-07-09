<?php

namespace App\Http\Controllers;

use App\Models\systeminfo;
use Illuminate\Http\Request;


class SysteminfoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
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
    public function show(systeminfo $systeminfo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(systeminfo $systeminfo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, systeminfo $systeminfo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(systeminfo $systeminfo)
    {
        //
    }
    public function login(systeminfo $systeminfo)
{
    $app_logo = $systeminfo->where('meta_name','app_logo')->first()->meta_value;
    return view('admin.login', ['app_logo' => $app_logo]);
}


}
