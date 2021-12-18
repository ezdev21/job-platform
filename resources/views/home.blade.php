@extends('layouts.app')
@section('content')
<div class="flex my-3 md:my-5 w-full md:w-11/12 md:mx-auto">
  <div class="w-1/4">
   <search-job-component/>
  </div> 
   <div class="w-1/2">
    <h1 class="text-xl font-medium mx-2">Recommended</h1>
    <div>
      @foreach ($jobs as $job)
       <div class="bg-white p-2 m-2 rounded-xl">
        <h1 class="text-xl font-medium">{{$job->title}}</h1>
        <div class="flex my-2">
         <p>{{$job->type}}</p>
         <p>{{$job->experience->type}}</p>
         <p></p>
        </div>
        <p class="text-base">{{$job->description}}</p>
        <div class="flex"></div> 
       </div>   
      @endforeach
    </div>
   </div> 
   <div class="w-1/4">
   
   </div>  
</div>
@endsection