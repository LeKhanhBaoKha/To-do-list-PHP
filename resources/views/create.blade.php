@extends('layouts.app')
@section('tittle')

@endsection
@section('content')
  <form class="w-[600px] m-auto border-gray-500 border rounded px-8 pt-6 pb-8 mb-4" action="store-data" method="post">
    @csrf
    <div class="flex items-center mb-6">
      <div class="w-1/5">
        <label class="block text-gray-500 font-bold text-left" for="todo name">
          To do name:
        </label>
      </div>
      <div class="w-4/5">
        <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="todo name" type="text" value="" name="name">
      </div>
    </div>
    <div class="flex items-center mb-6">
      <div class="w-1/5">
        <label class="block text-gray-500 font-bold text-left" for="description">
          Description:
        </label>
      </div>
      <div class="w-4/5">
        <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="description" type="text" name="description" placeholder="">
      </div>
    </div>
    <div class="flex items-center mb-6">
        <div class="w-1/5">
          <label class="block text-gray-500 font-bold text-left " for="description">
            Project name:
          </label>
        </div>
        <div class="w-4/5">
            <select name="project_id" id="cars">
                @foreach ($todo as $todo)
                <option value="{{$todo->project_id}}">{{$todo->name}}</option>
                @endforeach
            </select>
        </div>
      </div>
    <div class="flex items-center">
      <div class="w-full">
        <button class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded w-full" type="submit">
          Submit
        </button>
      </div>
    </div>
  </form>
@endsection
