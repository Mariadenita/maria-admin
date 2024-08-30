<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function slider()
    {
        return view('slider');
    }

    public function addslider()
    {
        return view('addslider');
    }

    public function upload(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'large_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validate the image file
            'slider' => 'nullable|string|max:255', // Validate slider text
            'button_name' => 'nullable|string|max:255', // Validate button name text
            'nav_link' => 'nullable|string|max:255', // Validate navigation link
        ]);

        // Create a new instance of the model
        $uploadForm = new Slider;

        // Handle large image upload
        if ($request->hasFile('large_image')) {
            $largeImage = $request->file('large_image');
            $largeImageName = time() . '_large.' . $largeImage->getClientOriginalExtension();
            $largeImage->move(public_path('uploads'), $largeImageName);
            $uploadForm->large_image = $largeImageName;
        }

        // Assign text input values to model attributes
        $uploadForm->slider = $request->input('slider');
        $uploadForm->button_name = $request->input('button_name');
        $uploadForm->nav_link = $request->input('nav_link');

        // Save the model instance to the database
        $uploadForm->save();

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Form data uploaded successfully.');
    }

    public function getSliders()
{
    $sliders = Slider::all(); // Fetch all slider records
    return response()->json($sliders); // Return data as JSON
}

}
