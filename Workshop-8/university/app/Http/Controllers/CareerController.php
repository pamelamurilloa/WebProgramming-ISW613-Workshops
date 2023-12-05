<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Career;


class CareerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $careers = Career::all();
        return view ('careers.index')->with('careers', $careers);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('careers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();
        Career::create($input);
        return redirect('career')->with('flash_message', 'Career Succesfully Added');  
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $career = Career::find($id);
        return view('careers.show')->with('careers', $career);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $career = Career::find($id);
        return view('careers.edit')->with('careers', $career);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $career = Career::find($id);
        $input = $request->all();
        $career->update($input);
        return redirect('career')->with('flash_message', 'Career Succesfully Updated');  
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Career::destroy($id);
        return redirect('career')->with('flash_message', 'Career Succesfully Deleted'); 
    }
}