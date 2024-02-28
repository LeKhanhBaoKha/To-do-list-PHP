@extends('layouts.app')
@section('content')
<table class="table-auto">
    <thead>
      <tr>
        <th class="px-4 py-2">Todo name</th>
        <th class="px-4 py-2">description</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($todo as $todo)
      <tr>

        <td class="border px-4 py-2">{{$todo->name}}</td>
        <td class="border px-4 py-2">{{$todo->description}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
@endsection
