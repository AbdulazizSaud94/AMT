<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Client;

class ClientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $clients = Client::all();
      // $rfqs = Rfq::orderBy('created_at', 'desc')->get();
      return view('clients.index')->with('clients', $clients);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clients.create');
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
          'address' => 'required',
          'telephone' => 'required'
      ]);

      // crete new client
      $client = new Client;
      $client->name = $request->input('name');
      $client->address = $request->input('address');
      $client->telephone = $request->input('telephone');
      $client->save();

      return redirect('/clients')->with('success', 'client Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $client = Client::find($id);
      return view('clients.show')->with('client', $client);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $client = Client::find($id);
      return view('clients.edit')->with('client', $client);
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
          'address' => 'required',
          'telephone' => 'required'
      ]);

      // update  client
      $client = Client::find($id);
      $client->name = $request->input('name');
      $client->address = $request->input('address');
      $client->telephone = $request->input('telephone');
      $client->save();

      return redirect('/clients')->with('success', 'Client updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $client = Client::find($id);
      $client->delete();
      return redirect('/clients')->with('success', 'Client Deleted');
    }
}
