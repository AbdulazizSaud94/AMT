<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Document;

class DocumentsController extends Controller
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
      $documents = Document::all();
      // $rfqs = Rfq::orderBy('created_at', 'desc')->get();
      return view('documents.index')->with('documents', $documents);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          return view('documents.create');
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
          'title' => 'required',
          'description' => 'required',
          'file' => 'required|mimes:pdf,docx,xlsx|max:1999'
      ]);

      // Handle file upload
      if ($request->hasFile('file')){
        // file name with extention
        $filenameWithExt = $request->file('file')->getClientOriginalName();

        // only file name
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

        // only file extention
        $extention = $request->file('file')->getClientOriginalExtension();

        // file name to Store
        $fileNameToStore = $filename.'_'.time().'.'.$extention;

        // upload file
        $path = $request->file('file')->storeAs('public/files', $fileNameToStore);
      }
      else {
        $fileNameToStore = 'nofile.jpg';
      }

      // add new document
      $document = new Document;
      $document->title = $request->input('title');
      $document->description = $request->input('description');
      $document->file = $fileNameToStore;
      $document->type = $extention;
      $document->user_id = auth()->user()->id; // add current user id to the document
      $document->save();

      return redirect('/documents')->with('success', 'Document Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function createDocumentAjax(Request $request){
        $document_title = $request->serial[1]['value'];
        $document_description  = $request->serial[2]['value'];
        $document_file  = $request->serial[3]['value'];

        // // file name with extention
        // $filenameWithExt = $document_file->getClientOriginalName();
        //
        // // only file name
        // $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        //
        // // only file extention
        // $extention = $document_file->getClientOriginalExtension();
        //
        // // file name to Store
        // $fileNameToStore = $filename.'_'.time().'.'.$extention;
        //
        // // upload file
        // $path = $document_file->storeAs('public/files', $fileNameToStore);
        //
        // add new document
        // $document = new Document;
        // $document->title = $document_title;
        // $document->description = $document_description;
        // // $document->file = $fileNameToStore;
        // // $document->type = $extention;
        // $document->user_id = auth()->user()->id; // add current user id to the document
        // $document->save();
        $response = array(
            'status' => "The Document $document_title is successfully added.",
            'title' => $document_title,
            'description' => $document_description,
            'file' => $document_file
        );
        return response()->json($response);
    }
}
