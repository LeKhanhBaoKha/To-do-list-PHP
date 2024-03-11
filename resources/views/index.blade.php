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
    @if ($todo != null)
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
                <label for="tw-modal" class="cursor-pointer rounded">Delete</label>
            </button>


        {{-- modal form --}}
            <div class="">
                <input type="checkbox" id="tw-modal" class="peer fixed appearance-none opacity-0" />
                <label for="tw-modal" class="pointer-events-none invisible fixed inset-0 flex cursor-pointer items-center justify-center overflow-hidden overscroll-contain bg-slate-700/30 opacity-0 transition-all duration-[0.5s] ease-in-out peer-checked:pointer-events-auto peer-checked:visible peer-checked:opacity-100 peer-checked:[&>*]:scale-100">
                <label class="max-h-[calc(100vh - 5em)] scale-99 h-fit max-w-lg overflow-auto overscroll-contain rounded-md bg-white p-6 text-black shadow-2xl transition" for="">
                    <h3 class="text-lg font-bold text-center">Warning!</h3>
                    <p class="py-4">Are you sure you want to delete this task?</p>
                    <div class="flex justify-around">
                        <button type="button" class="close-modal bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded mr-4">
                            Close
                        </button>
                        <button class="font-bold py-2 px-4 rounded bg-red-500 hover:bg-red-400 text-white">
                            <a href="/public/delete/{{$todo->id}}">Delete</a>
                        </button>
                    </div>

                </label>
                </label>
            </div>

      </td>
      {{-- @endif --}}
    </tr>
    @endforeach

    @else
    <p>Nothing to do, let's chill</p>
    @endif

    </tbody>
  </table>

    <script>
    document.addEventListener('DOMContentLoaded', function () {
       const closeButtons = document.querySelectorAll('.close-modal');

       closeButtons.forEach(function (button) {
         button.addEventListener('click', function () {
           document.getElementById('tw-modal').checked = false;
         });
       });
    });
   </script>
@endsection
