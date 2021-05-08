<?php


namespace App\Web\Task\Controllers;

use App\Core\Http\Controllers\Controller;
use App\Web\Task\Requests\TaskRequest;
use Domain\Task\Actions\CreateTaskAction;
use Domain\Task\Models\Task;
use Domain\Task\TataTransferObject\TaskData;

class TaskController extends Controller
{


    public function index()
    {
        $tasks=app(Task::class)->get();
        dd($tasks);
        //return view('welcome',compact('tasks'));
    }

    public function store(TaskRequest $request, CreateTaskAction $action)
    {
        $data=TaskData::fromRequest($request);

        $action($data);

        return back()->with(['success' => 'Tarefa realizada com sucesso!']);

    }

}