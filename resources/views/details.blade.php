@extends('layouts.app')
@section('content')
<div class="w-1/2 m-auto max-w-sm rounded overflow-hidden border p-4">
      <div class="font-bold text-xl mb-2">Name: {{$todo->name}}</div>
      <p class="text-gray-700 text-base">
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
