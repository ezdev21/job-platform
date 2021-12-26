@extends('layouts.app')
@section('content')
 <div class="w-full md:w-1/2 md:mx-auto rounded-xl p-3 bg-white">
    <h1 class="text-2xl m-1 p-2 text-center border-b-2 border-gray-300">create a new job here</h1>
   <form action="{{route('job.store')}}">
    <label for="title" class="text-xl">job title</label> 
    <input type="text" name="title" placeholder="job title" class="text-xl text-first my-1 w-full p-2 rounded-xl border-2 border-gray-300">
    <label for="description" class="text-xl">job description</label>
    <textarea name="description" class="h-32 text-xl text-first my-1 w-full rounded-xl border-2 border-gray-300"></textarea> 
   </form>
 </div>   
@endsection