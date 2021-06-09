<?php

namespace App\Http\Controllers;

use App\User;
use App\Appointments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $appointements = Appointments::all()->where('user_id',$id);

        $user = User::with(['appointments'])->find($id);
		return view('user.show', ['user' => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
		return view('user.edit', ['user' => $user]);
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
    
        $request->validate([
            'name' => 'required|string|max:255',
            'first_name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'phone_number' => 'required|string|max:255',
            'email'=>'required|string|email|max:255',
            'current-password' => 'required',
            ]);

        $user = User::find($id);
        
        $currentPassword = $request->get('current-password');        

        $newPassword = $request->get('new-password');
        $passwordConfirmation = $request->get('new-password-confirmation');
        
        if (Hash::check($currentPassword, $user->password)) {
            
            if ($newPassword == null && $passwordConfirmation == null) { 
                $user->fill([
                    'name'=>$request->get('name'),
                    'first_name'=>$request->get('first_name'),
                    'address'=>$request->get('address'),
                    'phone_number'=>$request->get('phone_number'),
                    'email'=>$request->get('email'),
                ]);
                $user->save();
                return redirect()->route('User.show', ['User' => $user])->with('message-new-data','Tu perfil es actualizado');
                 
            } elseif ($newPassword == $passwordConfirmation) {
                $user->fill([
                    'name'=>$request->get('name'),
                    'first_name'=>$request->get('first_name'),
                    'address'=>$request->get('address'),
                    'phone_number'=>$request->get('phone_number'),
                    'email'=>$request->get('email'),
                    'password'=>Hash::make($request->get('new-password')),
                ]);

                $user->save();
                return redirect()->route('User.show', ['User' => $user])->with('message-new-password','La nueva contraseña es registrada') ;

            } else {
                return redirect()->route('User.edit', ['User' => $user])->with('message-confirmation','La contraseña de confirmación no corresponde');
            }
        } else {
            return redirect()->route('User.edit', ['User' => $user])->with('message','La contraseña es incorrecta');
        };
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $user = User::find($id);

        $currentPassword = $request->get('current-password');       

        if (Hash::check($currentPassword, $user->password)) {
            $user->delete();
            return redirect()->route('home');
        } else {
            return redirect()->route('User.edit', ['User' => $user])->with('message-delete','Para borrar a tu cuenta, confirma a tu contraseña');
        };    
    }
}
