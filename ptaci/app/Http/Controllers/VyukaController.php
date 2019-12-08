<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VyukaController extends Controller
{
    //
    public function index()
    {
        //return view('vyuka.show');
        return view('vyuka.index');
    }

/*    public function show(Provozna $provozna)
    {
        //
        return view('provozna.show', compact('provozna'));

    }*/

    public function orel()
    {
        return view('vyuka.orel');
    }

    public function stehlik()
    {
        return view('vyuka.stehlik');
    }

    public function sojka()
    {
        return view('vyuka.sojka');
    }

    public function search(Request $request)
    {
        // dd($request);
        if($request->search === null)
        {
            return redirect()->back();
        } else {
            if( ($request->search === "Sojka") || ($request->search === "sojka") )
            {
                return view('vyuka.sojka');
            } else if( ($request->search === "Orel") || ($request->search === "orel") )
            {
                return view('vyuka.orel');
            } else if( ($request->search === "Stehlik") || ($request->search === "stehlik") )
            {
                return view('vyuka.stehlik');
            } else{
                return redirect()->back()->with('message', 'Je nám líto, ale tenhle krasavec není v naší databázi :(');
            }
 
        }
        return view('vyuka.sojka');

    }



}

