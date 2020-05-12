<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>タスク詳細</title>
    <link rel="stylesheet" href="">
</head>
<body>
    <a href="{{ route('task.index') }}">一覧に戻る</a>
    <h1>{{ $task->name }}</h1>
    <p>期日：{{ $task->deadline }}</p>
    <p>{{ $task->detail }}</p>
</body>
</html>