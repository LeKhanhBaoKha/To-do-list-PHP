@extends('layouts.app')
@section('content')
<table class="table-auto md:w-[1050px] m-auto">
    <thead>
      <tr>
        <th class="px-4 py-2">Todo name</th>
        <th class="px-4 py-2">description</th>
        <th class="px-4 py-2">Project name</th>
        <th class="px-4 py-2">state</th>
        <th class="px-4 py-2">Belongs to</th>

        {{-- @if(auth()->check()) --}}
        <th class="px-4 py-2">function</th>
        {{-- @endif --}}

    </tr>
    </thead>
    <tbody>
        @foreach ($todo as $todo)
      <tr>
        <td class="border px-4 py-2">{{$todo->name}}</td>
        <td class="border px-4 py-2">{{$todo->description}}</td>
        <td class="border px-4 py-2">{{$todo->project->name}}</td>
        <td class="border px-4 py-2">
        @if($todo->state == 0)
            <p class="font-bold text-blue-600">In process</p>
        @else
            <p class="font-bold text-green-600">Complete</p>
        @endif
        </td>

        <td class="border px-4 py-2">
            {{$todo->user->name}}
        </td>

        {{-- @if (auth()->check()) --}}
        <td class="border px-4 py-2">
            <button class="font-bold py-2 px-4 rounded bg-blue-500 hover:bg-blue-400 text-white mr-2">
                <a href="/public/details/{{$todo->id}}">Details</a>
            </button>
            <button class="font-bold py-2 px-4 rounded bg-blue-500 hover:bg-blue-400 text-white mr-2">
                <a href="/public/edit/{{$todo->id}}">Edit</a>
            </button>
            <button class="font-bold py-2 px-4 rounded bg-red-500 hover:bg-red-400 text-white">
                <a href="/public/delete/{{$todo->id}}">Delete</a>
            </button>
        </td>
        {{-- @endif --}}

      </tr>
      @endforeach
    </tbody>
  </table>
@endsection
