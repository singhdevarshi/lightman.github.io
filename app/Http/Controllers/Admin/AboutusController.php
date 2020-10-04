<?php

namespace App\Http\Controllers\Admin;

use App\Models\About;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutusController extends Controller
{
    public function index()
    {
        $abouts = About::all();
        return view ('admin.aboutus')->with('abouts', $abouts);
    }
    public function store(Request $request)
    {
        $abouts = new About;
        $abouts->title = $request->input('title');
        $abouts->subtitle = $request->input('subtitle');
        $abouts->description = $request->input('description');

        $abouts->save();
        return redirect('/about')->with('status', 'Data Added for About Us');
    }
    public function edit($id)
    {
        $abouts = About::findOrFail($id);
        return view('admin.abouts.edit')->with('abouts', $abouts);
    }
    public function update(Request $request, $id)
    {
        $abouts = About::findOrFail($id);
        $abouts->title = $request->input('title');
        $abouts->subtitle = $request->input('subtitle');
        $abouts->description = $request->input('description');

        $abouts->update();
        return redirect('/about')->with('status', 'Data Added for About Us');
    }
    public function delete($id)
    {
        $abouts = About::findOrFail($id);
        $abouts->delete();
        return redirect('about')->with('status', 'Data Deleted');

    }
}
