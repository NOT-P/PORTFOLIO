<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Social;
use Illuminate\Http\Request;

class SocialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $socials = Social::all();
        return view('backend.pages.social.index',compact('socials'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.pages.social.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request->all());

        $request->validate([
            'icon_name' => 'required',
            'social_link' => 'required',
        ]);

        Social::create([
            'icon_name' => $request->icon_name,
            'social_link' => $request->social_link,
        ]);

        flash()->success('Create Social created successfully!');
            return redirect()->route('socials.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Social $social)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $social = Social::findOrFail($id);

        return view('backend.pages.social.edit',compact('social'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Social $social)
    {
        $request->validate([
            'icon_name' => 'required',
            'social_link' => 'required',
        ]);

        $social->update([
            'icon_name' => $request->icon_name,
            'social_link' => $request->social_link,
        ]);

        flash()->success('Create Social  successfully!');
            return redirect()->route('socials.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        
        $social = Social::findOrFail($id);
        $social->delete();
        flash()->success(' Social delete successfully!');
            return redirect()->route('socials.index');
    }
}
