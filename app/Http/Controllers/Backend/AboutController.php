<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\about;
use Exception;

use function Flasher\Prime\flash;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $about = about::first();
        return view('backend.pages.about.updateOrCreate',compact('about'));
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

        try{
            $request->validate([
                'title' => 'required',
                'details' => 'required',
            ]);

            $about = About::first();
            About::updateOrCreate(
    ['id' => $about->id ?? null],
        [
                'title' => $request->title,
                'details' => $request->details
                ]
            );
            flash()->success('About created successfully!');
            return redirect()->back();
        }catch(Exception $e){
            //flash()->error("something went wrong");
            return redirect()->back()->with('error',"something went wrong");
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
