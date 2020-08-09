<?php

namespace App\Http\Controllers\Manage;

use App\Portfolio;
use App\Traits\ImageUpload;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PortfolioController extends Controller
{
    use ImageUpload;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Portfolio::all();

        return view('manage.portfolios.index')->with('projects', $projects);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('manage.portfolios.create');
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
            'name' => 'required|min:3',
            'url' => 'required|url',
            'content' => 'required|min:3',
            'cover_image' => 'required|image',
            'logo' => 'required|image',
            'preview' => 'required|image',
            'slug' => 'required',
        ]);

        $project = new Portfolio;
        $project->name = $request->name;
        $project->url = $request->url;
        $project->content = $request->content;
        $project->slug = Str::slug($request->slug, '-');
        $project->cover_image = $this->UserImageUpload($request->cover_image, '/portfolio/cover-images/');
        $project->logo = $this->UserImageUpload($request->logo, '/portfolio/logos/');
        $project->preview = $this->UserImageUpload($request->preview, '/portfolio/previews/');
        $project->save();

        return redirect()->route('manage.portfolios.index')->with('success', 'Portfolio project created successfully.');
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
        $project = Portfolio::findOrFail($id);

        return view('manage.portfolios.edit')->with('project', $project);
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
            'name' => 'required|min:3',
            'url' => 'required|url',
            'content' => 'required|min:3',
        ]);

        $project = Portfolio::find($id);
        $project->name = $request->name;
        $project->url = $request->url;
        $project->content = $request->content;
        if ($request->cover_image) {
            $project->cover_image = $this->UserImageUpload($request->cover_image, '/portfolio/cover-images/');
        }
        if ($request->logo) {
            $project->logo = $this->UserImageUpload($request->logo, '/portfolio/logos/');
        }
        if ($request->preview) {
            $project->preview = $this->UserImageUpload($request->preview, '/portfolio/previews/');
        }
        $project->save();

        return redirect()->route('manage.portfolios.index')->with('success', 'Portfolio project created successfully.');
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
}
