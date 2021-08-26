<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Announcament;
use App\Company;
use App\User;
use App\Applicant;
use App\CompanyForm;
use App\Http\Requests\announcamentsRequest;
Use Alert;

class AnnouncamentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Announcaments.index')->with('announcaments',Announcament::all());   
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Announcaments.create');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(announcamentsRequest $request)
    {
            Announcament::create($request->all());
               return redirect( route('home'))->with('success', 'Post created Successfully!');    
    }
    public function show($id)
    {
        return view('request')->with('announcaments',Announcament::all());
       
    }
   
    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
      

    }
    
    


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
