<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Departaments</title>
</head>
<body>

    <div class="navbar">
        <a href="http://127.0.0.1:8000/employee">Employees</a>
        <a href="http://127.0.0.1:8000/task">Tasks</a>
        <a href="http://127.0.0.1:8000/department">Departaments</a>
    </div>
    <hr>

    <h1>Departaments</h1>

    <form action={{ route('department.post') }} method="post">
        @csrf
        <span>Department name:</span><br>
        <input name="name" type="text"><br><br>
        <input name="button-submit" type="submit" value="Register">
    </form>
    <hr>
</body>
</html>