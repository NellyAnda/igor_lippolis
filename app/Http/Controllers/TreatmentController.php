<?php

namespace App\Http\Controllers;

use App\Treatment;
use Illuminate\Http\Request;

class TreatmentController extends Controller
{
  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function index()
  {
    //
  }
  
  /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function create()
  {
    return view('treatment.create');
  }
  
  /**
  * Store a newly created resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
  public function store(Request $request)
  {
    $request->validate(['treatment_name' => 'required','treatment_path' => 'required','treatment_picture_description' => 'required','picture' => 'required']);
    
    $picture = $request->file('picture')->store('public/homepage_treatments');
    $picture = substr($picture, 7);
    
    $treatments = new Treatment(['treatment_name' => $request->get('treatment_name'),'treatment_path' => $request->get('treatment_path'),'treatment_picture_description' => $request->get('treatment_picture_description'),'picture' => $picture]);
    $treatments->save();
    
    return redirect()->route('home')->with('message', 'El tratamiento ha sido anadido');
  }
  
  /**
  * Display the specified resource.
  *
  * @param  \App\Treatment  $treatment
  * @return \Illuminate\Http\Response
  */
  public function show($id)
  {
    //
  }
  
  /**
  * Show the form for editing the specified resource.
  *
  * @param  \App\Treatment  $treatment
  * @return \Illuminate\Http\Response
  */
  public function edit($id)
  {
    //
  }
  
  /**
  * Update the specified resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @param  \App\Treatment  $treatment
  * @return \Illuminate\Http\Response
  */
  public function update(Request $request, $id)
  {
    //
  }
  
  /**
  * Remove the specified resource from storage.
  *
  * @param  \App\Treatment  $treatment
  * @return \Illuminate\Http\Response
  */
  public function destroy($id)
  {
    $treatments = Treatment::find($id);
    $treatments->delete();
    
    return redirect()->route('admin')->with('message', 'El tratamiento ha sido suprimido !');
  }
}
