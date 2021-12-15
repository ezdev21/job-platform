@extends('layouts.app')
@section('content')
<div class="flex my-3 md:my-5 w-full md:w-5/6 md:mx-auto bg-blue-100">
  <div class="w-1/4">
   <search-job-component/>
  </div> 
   <div class="w-1/2">
    <h1>recommended</h1>
    <div>
      @foreach ($jobs as $job)
       <div>
        <h1>{{$job->title}}</h1>
        <div class="flex">
         <p>{{$job->type}}</p>
         <p>{{$job->experience->type}}</p>
         <p></p>
        </div>
        <p>{{$job->description}}</p>
        <div class="flex"></div> 
       </div>   
      @endforeach
    </div>
   </div> 
   <div class="w-1/4">
   
   </div>  
</div>
@endsection