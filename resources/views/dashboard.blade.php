<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap-icons.min.css">">
    <link rel="stylesheet" href="css/bootstrap-icons.min.css">
    <script src="css/bootstrap-icons.min.css"></script>
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

    <div class="card">
        <h2>students</h2>
        <p>{{$studentsCount}}</p>
    </div>

    <div class="card">
        Lessons</h2>
        <p>{{$lessonsCount}}</p>
    </div>
</body>
</html>
