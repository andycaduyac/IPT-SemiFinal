<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Venue;
class VenueController extends Controller
{
    public function index(){
            $venues = Venue::orderByRaw('id')->get();
        return view('venues.index',['venues'=>$venues]);
    }
    public function create(){
        return view('venues.create');
    }
    public function store(Request $request){
        $this ->validate($request, [
            'name' => 'required',
            'address'=> 'required',
            'capacity'=> 'required',
            'price'=> 'required',
        ]);

        Venue::create( [
            'name' => $request['name'],
            'address' => $request['address'],
            'capacity' => $request['capacity'],
            'price' => $request['price'],
        ]);

        return redirect('/venues')->with('info', 'Added a new venue.');
    }
}
