<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Devision;

class DevisionsController extends Controller
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
      $devisions = Devision::all();
      // $rfqs = Rfq::orderBy('created_at', 'desc')->get();
      return view('devisions.index')->with('devisions', $devisions);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('devisions.create');
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

      // crete new devision
      $devision = new Devision;
      $devision->name = $request->input('name');
      $devision->description = $request->input('description');
      $devision->save();

      return redirect('/devisions')->with('success', 'Devision Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $devision = Devision::find($id);
      return view('devisions.show')->with('devision', $devision);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $devision = Devision::find($id);
      return view('devisions.edit')->with('devision', $devision);
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

      // update devision
      Devision::find($id);
      $devision->name = $request->input('name');
      $devision->description = $request->input('description');
      $devision->save();

      return redirect('/devisions')->with('success', 'Devision Added');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $devision = Devision::find($id);
      $devision->delete();
      return redirect('/devisions')->with('success', 'Devision Deleted');
    }
}
