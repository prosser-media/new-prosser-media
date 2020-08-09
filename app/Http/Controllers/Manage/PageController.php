<?php

namespace App\Http\Controllers\Manage;

use App\Page;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pages = Page::all();

        return view('manage.pages.index')->with('pages', $pages);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('manage.pages.create');
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
            'page_title' => 'required',
            'slug' => 'required|unique:pages,id',
            'content' => 'required|min:3',
        ]);

        $page = new Page;
        $page->page_title = $request->page_title;
        $page->slug = Str::slug($request->slug, '-');
        $page->content = $request->content;
        $page->save();

        return redirect()->route('manage.pages.index')->with('success', 'Page created successfully.');
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
        $page = Page::findOrFail($id);

        return view('manage.pages.edit')->with('page', $page);
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
            'page_title' => 'required',
            'slug' => 'required|unique:pages,id',
            'content' => 'required|min:3',
        ]);

        $page = Page::find($id);
        $page->page_title = $request->page_title;
        $page->slug = Str::slug($request->slug, '-');
        $page->content = $request->content;
        $page->save();

        return redirect()->route('manage.pages.index')->with('success', 'Page updated successfully.');
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
