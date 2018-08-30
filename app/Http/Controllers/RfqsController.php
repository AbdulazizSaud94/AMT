<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Rfq;
use App\System;
use App\Workscope;
use App\Project;
use App\Client;
use App\Division;

//to use Rfq model and eloquent for database
// use DB; Basic SQL commands

class RfqsController extends Controller
{

  // Access control using middleware
    // public function __construct()
    // {
    //   $this->middleware('auth');
    // }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $rfqs = Rfq::all();
        $rfqs = Rfq::orderBy('created_at', 'desc')->get();
        return view('rfqs.index')->with('rfqs', $rfqs);
    }

    public function pending()
    {
        // $rfqs = Rfq::all();
        $rfqs = Rfq::where('status', 'pending')->orderBy('created_at', 'desc')->get();
        return view('rfqs.index')->with('rfqs', $rfqs);
    }

    public function rejected()
    {
        // $rfqs = Rfq::all();
        $rfqs = Rfq::where('status', 'Rejected')->orderBy('created_at', 'desc')->get();
        return view('rfqs.index')->with('rfqs', $rfqs);
    }

    public function approved()
    {
        // $rfqs = Rfq::all();
        $rfqs = Rfq::where('status', 'Approved')->orderBy('created_at', 'desc')->get();
        return view('rfqs.index')->with('rfqs', $rfqs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $systems = System::all();
        $workscopes = Workscope::all();
        $projects = Project::all();
        $clients = Client::all();
        $divisions = Division::all();
        return view('rfqs.create')->with('workscopes', $workscopes)->with('systems', $systems)->with('projects', $projects)->with('clients', $clients)->with('divisions', $divisions);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $this->validate($request, [
        //     'received_by' => 'required',
        //     'deleviry_place' => 'required',
        //
        // ]);
        $rfq = new Rfq();
        $systems = $request->input('system');
        $workscopes = $request->input('workscope');
        $divisions = $request->input('division');
        $rfq->user_id = auth()->user()->id; // add current user id to the created rfq
        $rfq->client_id = $request->input('client_id');
        $rfq->project_id = $request->input('project_id');
        $rfq->project_type = $request->input('project_type');
        $rfq->receiving_method = $request->input('receiving_method');
        $rfq->delivery_place = $request->input('delivery_place');
        $rfq->win_chance = $request->input('win_chance');
        $rfq->margin = $request->input('margin');
        $rfq->save();

        foreach ($systems as $system) {
            $rfq->systems()->attach($system);
        }

        foreach ($workscopes as $workscope) {
            $rfq->workscopes()->attach($workscope);
        }

        foreach ($divisions as $division) {
            $rfq->divisions()->attach($division);
        }

        return redirect('/rfqs')->with('success', 'RFQ Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $rfq = Rfq::find($id);
        return view('rfqs.show')->with('rfq', $rfq);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $rfq = Rfq::find($id);

      //check for valid user
      if(auth()->user()->id !== $rfq->user_id){
        return redirect('/rfqs')->with('error', 'Unathorized page');
      }

      $systems = System::all();
      $workscopes = Workscope::all();
      $projects = Project::all();
      $clients = Client::all();
      $divisions = Division::all();
      return view('rfqs.edit')->with('rfq', $rfq)->with('workscopes', $workscopes)->with('systems', $systems)->with('projects', $projects)->with('clients', $clients)->with('divisions', $divisions);
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
        $rfq = Rfq::find($id);

        $rfq->systems()->detach();
        $rfq->workscopes()->detach();
        $rfq->divisions()->detach();

        $systems = $request->input('system');
        $workscopes = $request->input('workscope');
        $divisions = $request->input('division');
        $rfq->user_id = auth()->user()->id; // add current user id to the created rfq
        $rfq->client_id = $request->input('client_id');
        $rfq->project_id = $request->input('project_id');
        $rfq->project_type = $request->input('project_type');
        $rfq->receiving_method = $request->input('receiving_method');
        $rfq->delivery_place = $request->input('delivery_place');
        $rfq->win_chance = $request->input('win_chance');
        $rfq->margin = $request->input('margin');
        $rfq->save();



        foreach ($systems as $system) {
            $rfq->systems()->attach($system);
        }

        foreach ($workscopes as $workscope) {
            $rfq->workscopes()->attach($workscope);
        }

        foreach ($divisions as $division) {
            $rfq->divisions()->attach($division);
        }

        return redirect('/rfqs')->with('success', 'RFQ Edited');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rfq = Rfq::find($id);
        $rfq->delete();
        return redirect('/rfqs')->with('success', 'RFQ Deleted');
    }

    // function to approve an RFQ
    public function approve($id)
    {
      $rfq = Rfq::find($id);
      $rfq->approved_by = auth()->user()->id;
      $rfq->status = 'Approved';
      $rfq->save();
      return redirect('/rfqs/pending')->with('success', 'RFQ Approved');
    }

    // function to reject an RFQ
      public function reject(Request $request, $id)
    {
      $rfq = Rfq::find($id);
      $rfq->rejected_by = auth()->user()->id;
      $rfq->status = 'Rejected';
      $rfq->justification = $request->input('justification');
      $rfq->recommendation = $request->input('recommendation');
      $rfq->save();
      return redirect('/rfqs/pending')->with('success', 'RFQ Rejected');
    }
}
