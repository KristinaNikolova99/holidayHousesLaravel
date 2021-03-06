<?php

namespace App\Http\Controllers\admin;

use App\Location;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Http\Requests\Locations;
class LocationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
      public function __construct()
    {
        $this->middleware('is_admin');
    }

    public function index()
    {
                $locations = Location::all();

        return view('Locations.index', compact('locations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Locations.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Locations $request)
    {
                \App\Location::create([
          'location' => $request->get('location'),
        ]);

        return redirect('/locations')->with('success', 'Location has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\location  $location
     * @return \Illuminate\Http\Response
     */
    public function show(Location $location)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $location = Location::find($id);

        return view('Locations.edit', compact('location'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $request->validate([
        'location'=>'required',
      ]);

      $location = Location::find($id);
      $location->location = $request->get('location');

      $location->save();

      return redirect('/locations')->with('success', 'Location has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $location = Location::find($id);
     $location->delete();

     return redirect('/locations')->with('success', 'Location has been deleted Successfully');
    }
}
