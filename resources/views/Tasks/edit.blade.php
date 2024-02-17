<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create a Task</title>
</head>
<body>
    <h1>Edit a Task</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>
                    {{$error}}
                </li>
            @endforeach
        </ul>
        @endif
    </div>
    <form method="post" action="{{route('task.update', ['task' => $task])}}">
        @csrf 
        @method('put')
        <div>
            <label>Title</label>
            <input type="text" name="title" placeholder="Title" value="{{$task->title}}" />
        </div>
        <div>
            <label>Description</label>
            <input type="text" name="description" placeholder="Description" value="{{$task->description}}" />
        </div>
        <div>
            <label>Date</label>
            <input type="date" name="date" placeholder="Date" value="{{$task->date}}" />
        </div>
        <div>
            <input type="submit" value="Update"/>
        </div>
    </form>
</body>
</html>
