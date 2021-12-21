@extends('layouts.app')
@section('content')
<div class="flex space-x-5 my-3 md:my-5 w-full md:w-11/12 md:mx-auto">
   <div class="w-3/4">
    <div class="">
      <search-job-component/>
     </div>
    <div>
      <h1 class="text-2xl font-medium mx-2">jobs for you</h1>
      @foreach ($jobs as $job)
       <div class="bg-white p-2 m-2 rounded-xl">
        <h1 class="text-xl font-medium">{{$job->title}}</h1>
        <div class="flex my-2">
         <p>{{$job->type}}</p>
         <p>{{$job->experience->type}}</p>
         <p><save-job-component :user="{{auth()->user}}" :job="{{$job}}" /></p>
         <p><report-job-component :user="{{auth()->user}}" :job="{{$job}}" /></p>
        </div>
        <p class="text-base">{{$job->description}}</p>
        <div class="flex">
         @foreach ($job->tags as $tag)
          <button>{{$tag}}</button>   
         @endforeach
        </div> 
        <div>
          <p>proposals {{$job->proposals}}</p>
          <p>{{$job->country}}</p>
        </div>
       </div>   
      @endforeach
    </div>
   </div> 
   <div class="w-1/4">
    
   </div>  
</div>
@endsection