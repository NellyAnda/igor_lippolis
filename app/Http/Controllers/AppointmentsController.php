<?php

namespace App\Http\Controllers;

use App\Appointments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class AppointmentsController extends Controller
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
        return view('appointments.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
              'time' => 'required',
              'place' => 'required',
            ]
          );
      

          $appointments = new Appointments([
            'time' => $request->get('time'),
            'place' => $request->get('place'),
          ]);
          
          $appointments->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Appointments  $appointments
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $appointments = Appointments::find($id);
		return view('appointments.show', ['appointments' => $appointments]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Appointments  $appointments
     * @return \Illuminate\Http\Response
     */
    public function edit(Appointments $appointments)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Appointments  $appointments
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Appointments $appointments)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Appointments  $appointments
     * @return \Illuminate\Http\Response
     */
    public function destroy(Appointments $appointments)
    {
        //
    }
}
