<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Project;

class ProjectsController extends Controller
{

  // Access control using middleware exception for show and index
  public function __construct()
  {
    $this->middleware('auth');
    $this->middleware('roles:admin;super admin', ['except' => ['index', 'show', 'create', 'store']]);
  }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $projects = Project::all();

      return view('projects.index')->with('projects', $projects);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('projects.create');
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
          'location' => 'required',
          'type' => 'required'
      ]);

      // crete new project
      $project = new Project;
      $project->name = $request->input('name');
      $project->location = $request->input('location');
      $project->type = $request->input('type');
      $project->user_id = auth()->user()->id; // add current user id to the project
      $project->save();

      return redirect('/projects')->with('success', 'Project Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $project = Project::find($id);
      return view('projects.show')->with('project', $project);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $project = Project::find($id);
      return view('projects.edit')->with('project', $project);
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
          'location' => 'required',
          'type' => 'required'
      ]);

      // update new project
      $project = Project::find($id);
      $project->name = $request->input('name');
      $project->location = $request->input('location');
      $project->type = $request->input('type');
      $project->save();

      return redirect('/projects')->with('success', 'Project Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $project = Project::find($id);
      $project->delete();
      return redirect('/projects')->with('success', 'Project Deleted');
    }

    public function createProjectAjax(Request $request){
        $project_name = $request->serial[1]['value'];
        $project_location = $request->serial[2]['value'];
        $project_type = $request->serial[3]['value'];

        $project = new Project;
        $project->name = $project_name;
        $project->location = $project_location;
        $project->type = $project_type;
        $project->user_id = auth()->user()->id; // add current user id to the project
        $project->save();
        $response = array(
            'status' => "The project $project_name is successfully added.",
            'id' => $project->id,
            'name' => $project_name,
            'location' => $project_location,
            'type' =>$project_type
        );
        return response()->json($response);
    }
}
