<?php

namespace App\Http\Controllers\admin;

use App\Type;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TypesController extends Controller
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
                $types = Type::all();

        return view('Types.index', compact('types'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Types.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
                \App\Type::create([
          'type' => $request->get('type'),
        ]);

        return redirect('/types')->with('success', 'Type has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Type  $type
     * @return \Illuminate\Http\Response
     */
    public function show(Type $type)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Type  $type
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $type = Type::find($id);

        return view('Types.edit', compact('type'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Type  $type
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $request->validate([
        'type'=>'required',
      ]);

      $type = Type::find($id);
      $type->type = $request->get('type');

      $type->save();

      return redirect('/types')->with('success', 'Type has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Type  $type
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $type = Type::find($id);
     $type->delete();

     return redirect('/types')->with('success', 'Type has been deleted Successfully');
    }
}
