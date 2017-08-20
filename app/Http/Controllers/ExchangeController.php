<?php

namespace App\Http\Controllers;

use App\Exchange;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class ExchangeController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|\Illuminate\View\View
     */
    public function create(){
        if(Auth::check()){
            return view('exchanges.create');
        }else{
            return redirect('/');
        }
    }

    /**
     * @param Request $request
     */
    public function store(Request $request){
        $exchange = new Exchange();
        $exchange-> user_id = Auth::id();
        $exchange-> name = $request->input('name');
        $exchange->api_key = $request->input('api_key');
        $exchange->api_secret = $request->input('api_secret');
        if($exchange->save()){
            return redirect("exchanges.ballances")->with('success','Exchange created');

        }else{
            return view('exchanges.create')->with('error', 'Exchange not created, try again later');
        }

    }


    public function ballance(){
        $user_id = Auth::id();
        $user = User::find($user_id);
        $user_exchanges = $user->exchanges();
        $ballance = $user_exchanges->getBallances();

    }
}
