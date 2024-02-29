<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Todo;
use Dotenv\Exception\ValidationException;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index(){
        $todo = Todo::with('project')->get();
        return view('index', compact('todo'));
    }

    public function create(){
        $todo = Project::all();
        return view('create', compact('todo'));
    }

    public function details(Todo $todo){
        $project = Project::all()->find($todo->project_id);
        return view('details', compact('project'))->with('todo', $todo);
    }

    public function edit($todoId){
        //use to load the value of the todo
        $todo = Todo::find($todoId);
        //use to load the list of project name
        $projects = Project::all();
        return view('edit', compact('projects'))->with('todo', $todo);
    }

    public function update(Todo $todo){
        try{
            $this->validate(request(),[
                'name' => ['required'],
                'description' => ['required'],
                'state' => ['required'],
                'project_id' => ['required']
            ]);
        }catch(ValidationException $e){

        }
        $data = request()->all();
        $todo->name = $data['name'];
        $todo->description = $data['description'];
        $todo->state = $data['state'];
        $todo->project_id = $data['project_id'];
        $todo->save();

        session()->flash('success', 'Todo updated successfully');
        return redirect('/');
    }

    public function delete(Todo $todo){
        $todo->delete();
        return redirect('/');
    }

    public function store(){
        return 1;
        try{
            $this->validate(request(),[
                'name' => ['required'],
                'description' => ['required'],
                'project_id' => ['required']
            ]);
        } catch(ValidationException $e){
        }
        $data = request()->all();
        return $data;
        $todo = new Todo();

        $todo->name = $data['name'];
        $todo->description = $data['description'];
        $todo->project_id = $data['project_id'];

        $todo->save();

        session()->flash('success', 'Todo created successfully');
        return redirect('/');
    }
}
