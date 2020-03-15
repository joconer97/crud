<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" href="{{asset('css/app.css')}}" />
    
</head>
<body>
  <div class="container">
    <div style="margin-bottom : 15px">
        <h1 class="title is-1">ToDo Application</h1>

        <form action="api/todo" method="post">
            <div class="field">
                <label class="label">ToDo Name</label>
                <div class="control">
                <input class="input" type="text" placeholder="ToDo" name="name">
                </div>
            </div>

            <div class="field is-grouped">
                <div class="control">
                <button class="button is-link">Save</button>
            </div>
        </form>
    </div>
  
    <div>
        <table class="table">
          <thead>
            <tr>
              <th>ToDo Name</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
          @foreach($todos as $todo)
            <tr>
              <td>{{$todo->name}}</td>
              <td>
                <a href="/api/todo/{{$todo->id}}">Delete</a>
              <a href="/todo/update/{{$todo->id}}">Update</a>
              </td>
            </tr>
          @endforeach
          </tbody>
        </table>
    </div>

  </div>
    
</body>
</html>