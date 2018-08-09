<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\System;

class SystemsController extends Controller
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
      $systems = System::all();
      // $rfqs = Rfq::orderBy('created_at', 'desc')->get();
      return view('systems.index')->with('systems', $systems);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('systems.create');
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

      // crete new system
      $system = new System;
      $system->name = $request->input('name');
      $system->description = $request->input('description');
      $system->save();

      return redirect('/systems')->with('success', 'System Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $system = System::find($id);
      return view('systems.show')->with('system', $system);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $system = System::find($id);
      return view('systems.edit')->with('system', $system);
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
      System::find($id);
      $system->name = $request->input('name');
      $system->description = $request->input('description');
      $system->save();

      return redirect('/systems')->with('success', 'System Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $system = System::find($id);
      $system->delete();
      return redirect('/systems')->with('success', 'System Deleted');
    }
}
