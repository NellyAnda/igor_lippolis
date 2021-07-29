<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Console\Scheduling\Schedule;
use App\User;
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
        
        // Auth::user()->administrator === 1;
    
       
        $appointments = Appointments::with('user')->get();
        return view('appointments.index', ['appointments'=>$appointments]);

    }
    
    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create()
    {
        $appointments = Appointments::with('user')->get();
        return view('appointments.create', ['appointments'=>$appointments]);
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
                'appointment_date' => 'required',
                'appointment_time' => 'required',
                'place' => 'required',
                ]
            );
            
            $appointments = new Appointments([
                'appointment_date' => $request->get('appointment_date'),
                'appointment_time' => $request->get('appointment_time'),
                'place' => $request->get('place'),
                'user_id' => $request->get('user_id'),
            ]);
            
            $appointments->save();
            
            $userId = Auth::user()->id;
            $userAppointments = Appointments::where('user_id', $userId)->get();
            
            $user = User::find($userId);
            // return redirect()->route('User.show',['User'=> $user, 'appointments'=> $userAppointments]);
            return view('user.show', ['User'=> $user, 'appointments' => $userAppointments]);
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
    