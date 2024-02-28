<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Dotenv\Exception\ValidationException;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index(){
        $todo = Todo::all();
        return view('index')->with('todo',$todo);
    }

    public function create(){
        return view('create');
    }

    public function details(Todo $todo){
        return view('details')->with('todo', $todo);
    }

    public function edit($todoId){
        $todo = Todo::find($todoId);
        return view('edit')->with('todo', $todo);
    }

    public function update(Todo $todo){
        try{
            $this->validate(request(),[
                'name' => ['required'],
                'description' => ['required'],
            ]);
        }catch(ValidationException $e){

        }
        $data = request()->all();

        $todo->name = $data['name'];
        $todo->description = $data['description'];
        $todo->save();

        session()->flash('success', 'Todo updated successfully');
        return redirect('/');
    }

    public function delete(Todo $todo){
        $todo->delete();
        return redirect('/');
    }

    public function store(){
        try{
            $this->validate(request(),[
                'name' => ['required', 'unique:todos,name'],
                'description' => ['required']
            ]);
        } catch(ValidationException $e){
        }
        $data = request()->all();
        $todo = new Todo();

        $todo->name = $data['name'];
        $todo->description = $data['description'];
        $todo->save();

        session()->flash('success', 'Todo created successfully');
        return redirect('/');
    }
}
