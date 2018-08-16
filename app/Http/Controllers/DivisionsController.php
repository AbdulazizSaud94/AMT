<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Division;

class DivisionsController extends Controller
{

  // Access control using middleware
  public function __construct()
  {
    $this->middleware('auth');
  }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $divisions = Division::all();
      // $rfqs = Rfq::orderBy('created_at', 'desc')->get();
      return view('divisions.index')->with('divisions', $divisions);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('divisions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate($request, [
          'name' => 'required',
          'description' => 'required'
      ]);

      // crete new division
      $division = new Division;
      $division->name = $request->input('name');
      $division->description = $request->input('description');
      $division->save();

      return redirect('/divisions')->with('success', 'Division Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $division = Division::find($id);
      return view('divisions.show')->with('division', $division);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $division = Division::find($id);
      return view('divisions.edit')->with('division', $division);
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
      $this->validate($request, [
          'name' => 'required',
          'description' => 'required'
      ]);

      // update division
      Division::find($id);
      $division->name = $request->input('name');
      $division->description = $request->input('description');
      $division->save();

      return redirect('/divisions')->with('success', 'Division Added');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $division = Division::find($id);
      $division->delete();
      return redirect('/divisions')->with('success', 'Division Deleted');
    }
}
