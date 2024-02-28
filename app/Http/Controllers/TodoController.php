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

    public function edit(){
        return view('edit');
    }

    public function update(){

    }

    public function delete(){

    }

    public function store(){
        try{
            $this->validate(request(),[
                'name' => ['required'],
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
