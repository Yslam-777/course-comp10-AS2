<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {padding: 30px; background: #f9f9f9;}
        .card { background: white;padding: 20px; margin-bottom: 20px; border-radius: 8px; box-shadow: 0 0 5px rgba(0,0,0,0.1)}
        .card h2 {margin: 0 0 10px;}
    </style>
</head>
<body>
    <h1>Admin panel</h1>

    <div class="card">
        <h2>Courses</h2>
        <p>{{$corsesCount}}</p>
    </div>

    <div class="card">
        <h2>teachers</h2>
        <p>{{$teachersCount}}</p>
    </div>


</body>
</html>
