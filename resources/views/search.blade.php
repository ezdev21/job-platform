@extends('layouts.app')
@section('content')
  <div>
   @forelse ($jobs as $job)
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
   @empty
    <p class="text-xl">sorry! no jobs found</p>   
   @endforelse
  </div>  
@endsection