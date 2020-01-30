<?php

namespace App\Http\Controllers;
use App\HolidayHouse;
use Illuminate\Http\Request;

class HolidayHousesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
                 $holidayhouses = HolidayHouse::all();

        return view('HolidayHouses.index',  compact('holidayhouses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('HolidayHouses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       \App\HolidayHouses::create([
          'name' => $request->get('name'),
          'location_id' => $request->get('location_id'),
          'numberOfRooms'=> $request->get('numberOfRooms'),
          'numberOfBeds' => $request->get('numberOfBeds'),
          'type_id' => $request->get('type_id'),
        ]);

        return redirect('/holidayhouses')->with('success', 'Holiday house has been added');
    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
              $holidayhouse = HolidayHouse::find($id);

        return view('HolidayHouses.edit', compact('holidayhouse'));
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
      $holidayhouse = HolidayHouse::find($id);
      $holidayhouse->name = $request->get('name');
      $holidayhouse->numberOfRooms = $request->get('numberOfRooms');
      $holidayhouse->numberOfBeds = $request->get('numberOfBeds');


      $holidayhouse->save();

      return redirect('/holidayhouses')->with('success', 'Holiday house has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $holidayhouse = HolidayHouse::find($id);
     $holidayhouse->delete();

     return redirect('/holidayhouses')->with('success', 'Holiday house has been deleted Successfully');
    }
}
