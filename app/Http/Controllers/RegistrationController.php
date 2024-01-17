<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use App\Http\Controllers\Controller;
use App\Http\Requests\RegistrationRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegistrationController extends Controller
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
        return view('registration');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RegistrationRequest $request)
    {
        User::create($request->all());
        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $registration)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $Registration)
    {
        return view("update_profile",['Registration' =>$Registration]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(RegistrationRequest $request, User $Registration)
    {
        $Registration->name=$request->name;
        $Registration->email=$request->email;
        $Registration->password=$request->password;
        $Registration->save(); 
        return redirect('home');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $registration)
    {
        //
    }

    public function postLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required|min:6',
        ]);
   
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('home')
                        ->withSuccess('You have Successfully loggedin');
        }
  
        return redirect("/")->withSuccess('Oppes! You have entered invalid email or password');
    }
}
