<?php

namespace App\Http\Controllers;

use View;
use App\Page;
use App\Service;
use App\Portfolio;
use App\PageContent;
use App\PersonalProject;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function __construct()
    {
        View::share('pageContent', PageContent::all());
    }

    public function home()
    {
        $personalProjects = PersonalProject::latest()->get()->take(2);
        $portfolioProjects = Portfolio::latest()->get()->take(2);

        return view('pages.home')->with([
            'personalProjects' => $personalProjects,
            'portfolioProjects' => $portfolioProjects,
        ]);
    }

    public function services()
    {
        return view('pages.services')->with('services', Service::all());
    }

    public function personalProjects()
    {
        $personalProjects = PersonalProject::latest()->get();

        return view('pages.personalprojects')->with('projects', $personalProjects);
    }

    public function portfolio()
    {
        $portfolioProjects = Portfolio::latest()->get();

        return view('pages.portfolio')->with('projects', $portfolioProjects);
    }

    public function portfolioShow($slug)
    {
        $project = Portfolio::where('slug', $slug)->get()->first();

        return view('pages.portfolioshow')->with('project', $project);
    }

    public function personalShow($slug)
    {
        $project = PersonalProject::where('slug', $slug)->get()->first();

        return view('pages.personalshow')->with('project', $project);
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function customPage($slug)
    {
        $page = Page::where('slug', $slug)->first();

        return view('pages.custompage')->with('page', $page);
    }
}
