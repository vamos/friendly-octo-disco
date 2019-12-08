<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

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
        abort_if((!auth()->check()),403);
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
        abort_if((!auth()->check()),403);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
        abort_if((!auth()->check()),403);
        
        if(auth()->user()->role != "admin"){
            abort_if($user->id != auth()->id(),403);
        }    
        return view('user.show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
        abort_if((!auth()->check()),403);

        if(auth()->user()->role != "admin"){
            abort_if($user->id != auth()->id(),403);
        }    
        return view('edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
    //
    $user->update(request()->validate([
        'name' => ['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'email', 'max:255'], //, 'unique:users'],
        ]));
            
        if(($request->password !== NULL) && ($request->password_confirmation !== NULL))    
        {
            $tmp = $request->validate(['password' => ['required', 'string', 'min:8', 'confirmed']]);

            $polozka->update(['password' => bcryp($tmp)]);    
        } 
        if( strcmp($request->email,$user->email) != 0  )
        {
            $tmp = $request->validate(['email' => ['unique:users', 'required', 'string', 'email']]);

            $polozka->update(['email' => $tmp]);    
        }
            return redirect('/');
    }

    public function update_perc(Request $request, $user)
    {
        $use = User::findOrFail($user);
        if($request->has('quiz_n')){
            $use->quiz_tnum +=  $request->quiz_n;
            $use->quiz_success +=  $request->quiz_c;
        } else if($request->has('time_n')){
            $use->time_tnum +=  $request->time_n;
            $use->time_success +=  $request->time_c;
        } else if($request->has('dd_n')){
            $use->dd_tnum +=  $request->dd_n;
            $use->dd_success +=  $request->dd_c;
        }
        $use->save();



        return ['message' => 'Update OK'];
    }   

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
        // dd($request);
        abort_if((!auth()->check()),403);
        $user->destroy($user->id);
        return redirect('/home');

    }
}
