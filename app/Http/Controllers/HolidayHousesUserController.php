<?php
namespace App\Http\Controllers;
use App\HolidayHouse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class HolidayHousesUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
                 $holidayhouses = DB::table('holiday_houses')
            ->join('locations', 'holiday_houses.location_id', '=', 'locations.id')
            ->join('types', 'holiday_houses.type_id', '=', 'types.id')
            ->select('holiday_houses.*', 'locations.location', 'types.type')
            ->get();
         

        return view('HolidayHousesUsers.index',  compact('holidayhouses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        // $holidayhouse = HolidayHouse::find($id);
         $details = DB::table('holiday_houses')
            ->join('locations', 'holiday_houses.location_id', '=', 'locations.id')
            ->join('types', 'holiday_houses.type_id', '=', 'types.id')
            ->select('holiday_houses.*', 'locations.location', 'types.type')
            ->get();

        return view('HolidayHousesUsers.show',  compact('details'));
    }

   


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
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
       }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        }
}
