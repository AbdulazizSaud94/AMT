<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Workscope;

class WorkscopesController extends Controller
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
      $workscopes = Workscope::all();
      // $rfqs = Rfq::orderBy('created_at', 'desc')->get();
      return view('workscopes.index')->with('workscopes', $workscopes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('workscopes.create');
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
          'title' => 'required'
      ]);

      // crete new workscope
      $workscope = new Workscope;
      $workscope->title = $request->input('title');
      $workscope->description = $request->input('description');
      $workscope->save();

      return redirect('/workscopes')->with('success', 'Workscope Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $workscope = Workscope::find($id);
      return view('workscopes.show')->with('workscope', $workscope);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $workscope = Workscope::find($id);
      return view('workscopes.edit')->with('workscope', $workscope);
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
          'title' => 'required',
          'description' => 'required'
      ]);

      // update workscope
      Workscope::find($id);
      $workscope->title = $request->input('title');
      $workscope->description = $request->input('description');
      $workscope->save();

      return redirect('/workscopes')->with('success', 'Workscope Added');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $workscope = Workscope::find($id);
      $workscope->delete();
      return redirect('/workscopes')->with('success', 'Workscope Deleted');
    }
}
