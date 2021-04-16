<?php

namespace App\Http\Controllers;

use App\User;
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
        $user = User::find($id);
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
            'new-password'=>'string|min:8|confirmed',
            ]);

        $user = User::find($id);
        
        $currentPassword = Hash::make($request->get('current-password'));
        

        $newPassword = $request->get('new-password');
        $passwordConfirmation = $request->get('new-password-confirmation');
        

        if (strcmp($currentPassword, $user->password)) {
            
           if (strcmp($newPassword, $passwordConfirmation)) {
                $user->fill([
                    'name'=>$request->get('name'),
                    'first_name'=>$request->get('first_name'),
                    'address'=>$request->get('address'),
                    'phone_number'=>$request->get('phone_number'),
                    'email'=>$request->get('email'),
                    'password'=>$request->get('new-password'),
                ]);

                $user->save();
                return redirect()->route('User.show', ['User' => $user]);
                
            } elseif ($newPassword == null && $passwordConfirmation == null) { // string vide
                $user->fill([
                    'name'=>$request->get('name'),
                    'first_name'=>$request->get('first_name'),
                    'address'=>$request->get('address'),
                    'phone_number'=>$request->get('phone_number'),
                    'email'=>$request->get('email'),
                ]);
                $user->save();
                return redirect()->route('User.show', ['User' => $user]);
            } else {
                //message les 2 mots de passe ne se correspondent pas
            }
        } else {
            return redirect()->route('User.edit', ['User' => $user])->with('message', 'La contraseña es incorrecta');
        };
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
		$user->delete();
		return redirect()->route('home');
    }
}
