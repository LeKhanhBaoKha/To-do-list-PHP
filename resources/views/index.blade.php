@extends('layouts.app')
@section('content')
<table class="table-auto">
    <thead>
      <tr>
        <th class="px-4 py-2">Todo name</th>
        <th class="px-4 py-2">description</th>
        <th class="px-4 py-2">function</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($todo as $todo)
      <tr>
        <td class="border px-4 py-2">{{$todo->name}}</td>
        <td class="border px-4 py-2">{{$todo->description}}</td>
        <td class="border px-4 py-2">
            <button class="font-bold py-2 px-4 rounded bg-blue-500 text-white mr-2">
                <a href="/details/{{$todo->id}}">Details</a>
            </button>
            <button class="font-bold py-2 px-4 rounded bg-blue-500 text-white mr-2">
                <a href="/edit/{{$todo->id}}">Edit</a>
            </button>
            <button class="font-bold py-2 px-4 rounded bg-red-500 text-white">
                <a href="/delete/{{$todo->id}}">Delete</a>
            </button>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
@endsection
