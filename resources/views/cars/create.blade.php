@extends('layouts.app')

@section('content')
    <div class="m-auto w-4/5 py-24">
        <div class="text-center">
            <h1 class="text-5xl uppercase bold text-blue-600">Add a new car</h1>
        </div>      
    </div>

    <div class="flex justify-center pt-20 bg-blue-300">
        <form action="/cars" method="POST">
            @csrf
            <div class="block">
                <input type="text" name="name" 
                class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400" placeholder="Brand name...">

                <input type="text" name="founded" 
                class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400" placeholder="Founded...">

                <input type="text" name="description" 
                class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400" placeholder="Description...">

                <button type="submit" class="bg-green-500 block shadow-5xl mb-10 p-2 w-80 uppercase font-bold text-white">Submit</button>
            </div>
        </form>
      
    </div>
@endsection