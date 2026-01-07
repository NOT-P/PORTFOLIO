<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\HeroProperty;
use Exception;
use Illuminate\Http\Request;

class HeroPropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $heroProperty = HeroProperty::first();

        return view('backend.pages.heroProperties.updateOrCreate', compact('heroProperty'));
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
        // dd($request->all());

        try {
            $request->validate([
                'keyLine' => 'required',
                'title' => 'required',
                'short_title' => 'required',
            ]);
            $data = HeroProperty::first();
            $filePath = $data->img ?? null;

            if ($request->hasFile('img')) {
                $request->validate([
                    'img' => 'image|mimes:jpeg,png,jpg,gif,svg,webp',
                ]);

                if ($data && $data->img && file_exists(public_path($data->img))) {
                    unlink(public_path($data->img));
                }

                $img = $request->file('img');
                $imgName = time().'.'.$img->getClientOriginalExtension();

                $img->move(public_path('images/heroProperties'), $imgName);

                $filePath = 'images/heroProperties/'.$imgName;
            }


            HeroProperty::updateOrCreate(
                ['id' => $data->id ?? null],
                [
                    'keyLine' => $request->keyLine,
                    'title' => $request->title,
                    'short_title' => $request->short_title,
                    'img' => $filePath
                ]
            );

            flash()->success('HeroProperty created successfully!');
            return redirect()->back();

            return redirect()->route('heroProperty.index');

        } catch (Exception $e) {
            return redirect()->back()->with('error','something  wont wrong');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(HeroProperty $heroProperty)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(HeroProperty $heroProperty)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, HeroProperty $heroProperty)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(HeroProperty $heroProperty)
    {
        //
    }
}
