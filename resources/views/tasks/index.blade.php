<?php
/**
 * @var array $tasks  - массив входных параметров
 */
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Skillbox laravel learning</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    <ul>
        @foreach ($tasks as $task)
            <li>{{ $task->body }}</li>
        @endforeach
    </ul>
</body>
</html>
