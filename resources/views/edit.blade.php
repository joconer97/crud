<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="row">
        <h1 class="title is-1">ToDo Application</h1>

        {!! Form::open(['route' => ['/update/todo', $todo->id]]); !!}
        {!! Form::text('name', $todo->name) !!}
        {!!Form::submit('Save'); !!}
        {!! Form::close() !!}

    </div>
</body>
</html>