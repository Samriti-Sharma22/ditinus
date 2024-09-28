<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Hierarchy</title>
    <style>
        ul {
            list-style-type: none; 
            padding-left: 20px;  
        }
        li {
            margin: 5px 0; 
        }
    </style>
</head>
<body>
    <h1>Employee Hierarchy</h1>
    <ul>
        @foreach($employees as $employee)
            @include('employees.partials.employee', ['employee' => $employee])
        @endforeach
    </ul>
</body>
</html>
