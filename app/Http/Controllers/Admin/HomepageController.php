<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\home_header;

class HomepageController extends Controller
{
    public function home_header()
    {
        return view('admin.HomePage.header');
    }
    public function home_banner()
    {
        return view('admin.HomePage.header1');
    }
    public function home_about()
    {
        return view('admin.HomePage.about');
    }
    public function home_feature()
    {
        return view('admin.HomePage.feature');
    }
    public function home_partners()
    {
        return view('admin.HomePage.partners');
    }
    public function home_footer()
    {
        return view('admin.HomePage.footer');
    }
    public function post_home_header(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|email',
            'phone' => 'required',
            'logo' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Example validation for image upload
            'facebook' => 'required',
            'twitter' => 'required',
            'instagram' => 'required',
            'linkedin' => 'required',
        ]);

        // Handle file upload (logo)
        if ($request->hasFile('logo')) {
            $imagePath = $request->file('logo')->store('uploads', 'public');
            $validatedData['logo'] = $imagePath;
        }

        // Create a new home_header record
        home_header::create($validatedData);

        // Redirect or return a response
        return redirect()->back()->with('success', 'Data has been saved.');
    }
}
