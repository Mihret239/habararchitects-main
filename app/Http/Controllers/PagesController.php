<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\News;
use App\Models\Image;

class PagesController extends Controller
{
    //
    public function openHabarHomepage()
    {
        $pageData = array (
            'pageTitle' => 'Habar Architects'
        );
        
        $projects = Project::where('featured', 1)->latest()->get();
        
        return view('homepage.indexPage', compact('projects'))->with($pageData);
    }
    public function openHabarAboutpage()
    {
        $pageData = array (
            'pageTitle' => 'About Habar Architects'
        );
        
        return view('homepage.about')->with($pageData);
    }
    public function openHabarContactpage()
    {
        $pageData = array (
            'pageTitle' => 'Contact Habar Architects'
        );
        
        return view('homepage.contact')->with($pageData);
    }
    public function openHabarProjects()
    {
        $pageData = array (
            'pageTitle' => 'Habar Architects — Project List'
        );
        
        $projects = Project::where('isActive', 1)->latest()->get();
        
        return view('homepage.project_list', compact('projects'))->with($pageData);
    }
    public function openHabarAllNews()
    {
        $pageData = array (
            'pageTitle' => 'Habar Architects — News'
        );
        
        $newses = News::where('isActive', 1)->latest()->get();
        
        return view('homepage.news_list', compact('newses'))->with($pageData);
    }
    public function openHabarNews($id)
    {
        $news = News::findOrFail($id);
        // $images = Image::findOrFail($id);

        // $images_array = json_decode($images->news_pictures);
        
        $pageData = array (
            'pageTitle' => $news->title
        );
        
        // return view('homepage.news', compact('news', 'images_array'))->with($pageData);
        return view('homepage.news', compact('news'))->with($pageData);
    }
    public function openHabarProject($id)
    {
        $project = Project::findOrFail($id);
        // $images = Image::findOrFail($id);

        // $images_array = json_decode($images->project_pictures);
        
        $pageData = array (
            'pageTitle' => $project->project_title
        );
        
        // return view('homepage.project', compact('project', 'images_array'))->with($pageData);
        return view('homepage.project', compact('project'))->with($pageData);
    }
}
