<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create a Task</title>
</head>
<body>
    <h1>Create a Task</h1>
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
    <form method="post" action="{{ route('task.store') }}">
        @csrf 
        @method('post')
        <div>
            <label>Title</label>
            <input type="text" name="title" placeholder="Title" />
        </div>
        <div>
            <label>Description</label>
            <input type="text" name="description" placeholder="Description" />
        </div>
        <div>
            <label>Date</label>
            <input type="date" name="date" placeholder="Date" />
        </div>
        <div>
            <input type="submit" value="Save a New Task"/>
        </div>
    </form>
</body>
</html>
