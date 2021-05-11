<?php
namespace Domain\Task\DadaTransferObject;


use App\Web\Task\Requests\TaskRequest;
use Spatie\DataTransferObject\DataTransferObject;


class TaskData extends DataTransferObject
{
    /* @var string */
    public $task;

    /* @var string */
    public $category;


    public static function fromRequest(TaskRequest $taskrequest): TaskData
    {
        return new Self([
            'task' => $taskrequest['task'],
            'category' => $taskrequest['category']

        ]);
    }
}