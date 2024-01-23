<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Employee</title>
</head>
<body>

    <div class="navbar">
        <a href="http://127.0.0.1:8000/employee">Employees</a>
        <a href="http://127.0.0.1:8000/task">Tasks</a>
        <a href="http://127.0.0.1:8000/department">Departaments</a>
    </div>
    <hr>
    
    <h1>Employees</h1>

    <form action={{ route('employee.index') }} method="post">
        @csrf
        <span>Name:</span><br>
        <input name="name" type="text"><br>
        <span>E-mail:</span><br>
        <input name="email" type="text"><br>
        <span>Phone:</span><br>
        <input name="phone" type="text"><br><br>
        <input name="button-submit" type="submit" value="Register">
        <hr>    
    </form>
</body>
</html>