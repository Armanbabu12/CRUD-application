<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskManagerController extends Controller
{
    public function create()
    {
        return view('user.createTask');

    }
    public function store()
    {
        $this->validate(request(),[
            'name' => 'required|min:10',
            'details' => 'required'
        ]);

        Task::create([
            'name' => request('name'),
            'details' => request('details'),
        ]);

        return  to_route(route: 'home')->with('successMessage','Created Success');
        //return redirect()->back();
    }

    public function index()
    {
        $allTasks = Task::paginate(1); // SELECT * FROM tasks


        return view('home',compact('allTasks'));
    }

    public function show($id)
    {
        $task = Task::find($id);// single object return

        return view('user.updateTask',compact('task'));
    }

    public function update($id)
    {
        $this->validate(request(),[
            'name' => 'required|min:10',
            'details' => 'required'
        ]);


        Task::find($id)->update([
            'name' => request('name'),
            'details' => request('details'),
        ]);

        return  to_route(route: 'home')->with('successMessage','Updated Success');

    }

    public function delete($id)
    {
        Task::find($id)->delete();

        return  to_route(route: 'home')->with('successMessage','Delete Success');

    }

    public function updateStatus($id,$status)
    {
        Task::find($id)->update([
            'status' => $status
        ]);

        return  to_route(route: 'home')->with('successMessage','Task Status Updated!!');

    }

}


