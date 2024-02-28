@extends('layouts.app')
@section('content')
<div class="max-w-sm rounded overflow-hidden shadow-lg">
    <div class="px-6 py-4">
      <div class="font-bold text-xl mb-2">{{$todo->name}}</div>
      <p class="text-gray-700 text-base">
        {{$todo->description}}
      </p>
    </div>
  </div>
@endsection
