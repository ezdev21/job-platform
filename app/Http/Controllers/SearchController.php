<?php

namespace App\Http\Controllers;

use App\Models\Search;
use App\Http\Requests\StoreSearchRequest;
use App\Http\Requests\UpdateSearchRequest;
use App\Models\Job;
use App\Models\Skill;
use App\Models\Tag;
use App\Models\Talent;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function searchJob(Request $request)
    {
      $searchQuery=$request->searchQuery;
      $jobs=Job::where('title','LIKE',"%${searchQuery}%");
      return view('search',compact('jobs'));  
    }
    public function searchTalent(Request $request)
    {
      $searchQuery=$request->searchQuery;
      $talents=Talent::where('title','LIKE',"%${searchQuery}%");
      return view('search',compact('talents'));  
    }
    public function searchTag(Request $request)
    {
      $searchQuery=$request->searchQuery;
      $tags=Tag::where('title','LIKE',"%${searchQuery}%");
      return view('search',compact('tags'));  
    }
    public function searchSkill(Request $request)
    {
      $searchQuery=$request->searchQuery;
      $skills=Skill::where('title','LIKE',"%${searchQuery}%");
      return view('search',compact('skills'));  
    }
    public function searchFreelancer(Request $request)
    {
      $searchQuery=$request->searchQuery;
      $freelancers=Freelancer::where('title','LIKE',"%${searchQuery}%");
      return view('search',compact('freelancers'));  
    }

}
