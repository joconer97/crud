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
</body>
</html>