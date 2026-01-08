<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Resume;
use Illuminate\Http\Request;

class ResumeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $resume = Resume::first();
        return view('backend.pages.resume.index',compact('resume'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request->all());

        $request->validate([
            'resume' => 'required|mimes:pdf|max:5120',
        ]);

        $resume = Resume::first();
        if(!$resume){
            $resume = new Resume();
        }

        if($request->hasFile('resume')){
            if($resume->downloadLink && file_exists(storage_path('app/public/'.$resume->downloadLink))){
                unlink(filename: storage_path('app/public/'.$resume->downloadLink));
            }

            $file = $request->file('resume');
            $fileName = time().'.'.$file->getClientOriginalExtension();
            $filePath = $file->storeAs('resume', $fileName,'public');

            $resume->downloadLink = $filePath;
            
        }
        $resume->save();


       
        flash()->success('Create  resume uploaded successfully!');
            return redirect()->back();

    }

    /**
     * Display the specified resource.
     */
    public function show(Resume $resume)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Resume $resume)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Resume $resume)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Resume $resume)
    {
        //
    }
}
