@extends('layouts.app')
@section('content')
<div class="w-1/2 m-auto max-w-sm rounded overflow-hidden border p-4">
      <div class="font-bold text-xl mb-2">Name: {{$todo->name}}</div>

      <div class="flex">
        <h3 class="">Description:</h3>&nbsp;
        <p class="">
            {{$todo->description}}
        </p>
      </div>

      <div class="flex">
        <h3>project name:</h3>&nbsp;
        <P>{{$project->name}}</P>
      </div>

      <div class="flex">
        <h3>Belongs to:</h3>&nbsp;
        <p> {{$todo->user->name}}</p>
      </div>

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
