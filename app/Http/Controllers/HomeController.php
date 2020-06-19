<?php

namespace App\Http\Controllers;

use App\Events\ReportesEvent;
use App\TempEvent;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function frontPage(){
        $data['events'] = TempEvent::all();
        return view('frontPage', $data);
    }
    
    public function createEvent(Request $request){
        TempEvent::create([
            'request' => json_encode($request->all())
        ]);
        ReportesEvent::dispatch();
    }
}
