<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tasks</title>
</head>
<body>

    <div class="navbar">
        <a href="http://127.0.0.1:8000/employee">Employees</a>
        <a href="http://127.0.0.1:8000/task">Tasks</a>
        <a href="http://127.0.0.1:8000/department">Departaments</a>
    </div>
    <hr>

    <h1>Tasks</h1>

    <form action={{ route('task.index') }} method="get">
        <span>Task name:</span><br>
        <input name="name" type="text"><br>
        <span>Start date:</span><br>
        <input name="start-date" type="date"><br>
        <span>End date:</span><br>
        <input name="end-date" type="date"><br>
        <span>Description:</span><br>
        <textarea name="description" id="description" cols="50" rows="5"></textarea><br><br>
        <input type="submit" value="Register">
    </form>
    <hr>
</body>
</html>