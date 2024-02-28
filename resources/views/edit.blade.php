@extends('layouts.app')
@section('tittle')

@endsection
@section('content')
  <form class="w-full max-w-sm m-5" action="/public/update/{{$todo->id}}" method="post">
    @csrf
    <div class="md:flex md:items-center mb-6">
      <div class="md:w-1/3">
        <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="todo name">
          To do name
        </label>
      </div>
      <div class="md:w-2/3">
        <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="todo name" type="text" value="{{$todo->name}}" name="name">
      </div>
    </div>
    <div class="md:flex md:items-center mb-6">
      <div class="md:w-1/3">
        <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="description">
          Description
        </label>
      </div>
      <div class="md:w-2/3">
        <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="description" type="text" name="description" value="{{$todo->description}}">
      </div>
    </div>
    <div class="max-w-lg mx-auto md:flex md:items-center ml-6">
        <fieldset class="mb-5">
            <legend class="text-gray-500 font-bold">
                State
            </legend>
            <div class="flex items-center mb-4">
                <input type="radio" name="state" value="0" class="h-4 w-4 border-gray-300 focus:ring-2 focus:ring-blue-300" aria-labelledby="state-option-1" aria-describedby="state-option-1" checked="">
                <label for="state-option-1" class="text-sm font-medium text-gray-900 ml-2 block">
                In progress
                </label>
            </div>

            <div class="flex items-center mb-4">
                <input id="state-option-2" type="radio" name="state" value="1" class="h-4 w-4 border-gray-300 focus:ring-2 focus:ring-blue-300" aria-labelledby="state-option-2" aria-describedby="state-option-2">
                <label for="state-option-2" class="text-sm font-medium text-gray-900 ml-2 block">
                Complete
                </label>
            </div>
        </fieldset>
    </div>
      <div class="ml-6">
        <button class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded p-10" type="submit">
          Edit
        </button>
      </div>
  </form>
@endsection
