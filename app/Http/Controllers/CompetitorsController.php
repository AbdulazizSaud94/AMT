<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Competitor;

class CompetitorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $competitors = Competitor::all();
      // $rfqs = Rfq::orderBy('created_at', 'desc')->get();
      return view('competitors.index')->with('competitors', $competitors);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('competitors.create');
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

      // crete new competitor
      $competitor = new Competitor;
      $competitor->name = $request->input('name');
      $competitor->description = $request->input('description');
      $competitor->save();

      return redirect('/competitors')->with('success', 'Competitor Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $competitor = Competitor::find($id);
      return view('competitors.show')->with('competitor', $competitor);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $competitor = Competitor::find($id);
      return view('competitors.edit')->with('competitor', $competitor);
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

      // update system
      Competitor::find($id);
      $competitor->name = $request->input('name');
      $competitor->description = $request->input('description');
      $competitor->save();

      return redirect('/competitors')->with('success', 'Competitor Added');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $competitor = Competitor::find($id);
      $competitor->delete();
      return redirect('/competitors')->with('success', 'Competitor Deleted');
    }
}
