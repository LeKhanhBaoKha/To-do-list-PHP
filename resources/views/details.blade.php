@extends('layouts.app')
@section('content')
<div class="max-w-sm rounded overflow-hidden shadow-lg">
    <div class="px-6 py-4">
      <div class="font-bold text-xl mb-2">{{$todo->name}}</div>
      <p class="text-gray-700 text-base">
        Description: {{$todo->description}}
        Description: {{$todo->description}}
      </p>
      <P>project name: {{$project->name}}</P>
    <div class="font-bold text-xl mb-2">
        @if($todo->state == 0)
        State:&nbsp;<p class="font-bold text-blue-600 inline">In process</p>
        @else
        State:&nbsp;<p class="font-bold text-green-600 inline">Complete</p>
        @endif
    </div>
    </div>
  </div>
@endsection
