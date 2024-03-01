@extends('layouts.app')
@section('tittle')

@endsection
@section('content')
  <form class="w-[600px] m-auto  border-gray-500 border rounded px-8 pt-6 pb-8 mb-4" action="/public/update/{{$todo->id}}" method="post">
    @csrf
    <div class="md:flex md:items-center mb-6">
      <div class="w-1/5">
        <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="todo name">
          Name:
        </label>
      </div>
      <div class="w-4/5">
        <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="todo name" type="text" value="{{$todo->name}}" name="name">
      </div>
    </div>
    <div class="md:flex md:items-center mb-6">
      <div class="w-1/5">
        <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="description">
          Description:
        </label>
      </div>
      <div class="w-4/5">
        <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="description" type="text" name="description" value="{{$todo->description}}">
      </div>
    </div>

    <div class="md:flex md:items-center mb-6">
        <div class="w-1/5">
          <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="project_id">
            Project :
          </label>
        </div>
        <div class="w-4/5">
            <select name="project_id" id="project_id">
                <option value="{{$todo->project_id}}">{{$todo->project->name}}</option>
                @foreach ($projects as $project)
                    @if ($todo->project->name == $project->name)
                        @continue
                    @else
                    <option value="{{$project->id}}">{{$project->name}}</option>
                    @endif
                @endforeach
              </select>
        </div>
    </div>

    <div class="md:flex md:items-center mb-6">
        <div class="w-1/5">
          <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="user_id">
            Belongs to :
          </label>
        </div>
        <div class="w-4/5">
            <select name="user_id" id="user_id">
                <option value="{{$todo->user_id}}">{{$todo->user->name}}</option>
                @foreach ($users as $user)
                    @if ($todo->user->name == $user->name)
                        @continue
                    @else
                    <option value="{{$user->id}}">{{$user->name}}</option>
                    @endif
                @endforeach
              </select>
        </div>
    </div>

    <div class="flex flex-row md:items-center h-[50px]">
            <div class="w-1/5 items-start h-full pb-14">
                <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="state">
                    State:
                  </label>
            </div>
            <div class="w-4/5 flex pb-3 gap-4">
                <div class="flex items-center mb-4">
                    <input type="radio" name="state" value="0" class="h-4 w-4 border-gray-300 focus:ring-2 focus:ring-blue-300" aria-labelledby="state-option-1" aria-describedby="state-option-1"  @if ($todo->state == 0)
                    checked
                    @endif
                    >
                    <label for="state-option-1" class="text-sm font-medium text-gray-900 ml-2 block" >
                    In progress
                    </label>
                </div>
                <div class="flex items-center mb-4">
                    <input id="state-option-2" type="radio" name="state" value="1" class="h-4 w-4 border-gray-300 focus:ring-2 focus:ring-blue-300" aria-labelledby="state-option-2" aria-describedby="state-option-2" @if ($todo->state == 1)
                    checked
                    @endif>
                    <label for="state-option-2" class="text-sm font-medium text-gray-900 ml-2 block">
                    Complete
                    </label>
                </div>
            </div>
    </div>
      <div class="md:flex md:items-center mb-6">
        <button class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded p-10 w-full" type="submit">

    <div class="md:flex md:items-center mb-6">
        <div class="w-1/5">
          <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="project_id">
            Project :
          </label>
        </div>
        <div class="w-4/5">
            <select name="project_id" id="project_id">
                <option value="{{$todo->project_id}}">{{$todo->project->name}}</option>
                @foreach ($projects as $project)
                    @if ($todo->project->name == $project->name)
                        @continue
                    @else
                    <option value="{{$project->id}}">{{$project->name}}</option>
                    @endif
                @endforeach
              </select>
        </div>
    </div>

    <div class="md:flex md:items-center mb-6">
        <div class="w-1/5">
          <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="user_id">
            Belongs to :
          </label>
        </div>
        <div class="w-4/5">
            <select name="user_id" id="user_id">
                <option value="{{$todo->user_id}}">{{$todo->user->name}}</option>
                @foreach ($users as $user)
                    @if ($todo->user->name == $user->name)
                        @continue
                    @else
                    <option value="{{$user->id}}">{{$user->name}}</option>
                    @endif
                @endforeach
              </select>
        </div>
    </div>

    <div class="flex flex-row md:items-center h-[50px]">
            <div class="w-1/5 items-start h-full pb-14">
                <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="state">
                    State:
                  </label>
            </div>
            <div class="w-4/5 flex pb-3 gap-4">
                <div class="flex items-center mb-4">
                    <input type="radio" name="state" value="0" class="h-4 w-4 border-gray-300 focus:ring-2 focus:ring-blue-300" aria-labelledby="state-option-1" aria-describedby="state-option-1"  @if ($todo->state == 0)
                    checked
                    @endif
                    >
                    <label for="state-option-1" class="text-sm font-medium text-gray-900 ml-2 block" >
                    In progress
                    </label>
                </div>
                <div class="flex items-center mb-4">
                    <input id="state-option-2" type="radio" name="state" value="1" class="h-4 w-4 border-gray-300 focus:ring-2 focus:ring-blue-300" aria-labelledby="state-option-2" aria-describedby="state-option-2" @if ($todo->state == 1)
                    checked
                    @endif>
                    <label for="state-option-2" class="text-sm font-medium text-gray-900 ml-2 block">
                    Complete
                    </label>
                </div>
            </div>
    </div>
      <div class="md:flex md:items-center mb-6">
        <button class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded p-10 w-full" type="submit">
          Edit
        </button>
      </div>
  </form>
@endsection
