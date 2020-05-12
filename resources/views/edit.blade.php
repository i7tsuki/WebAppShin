<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>タスク編集</title>
    <link rel="stylesheet" href="">
</head>
<body>
    <form action="{{route('task.update', ['id' => $task->id])}}" method="POST">
        @csrf
        タスク名：<input type="text" name="name" value="{{ $task->name }}" placeholder=""><br>
        @if ($errors->has('name') )
        <span>{{ $errors->first('name') }}</span><br>
        @endif
        期日　　：<input type="date" name="deadline" value="{{ $task->deadline }}" placeholder=""><br>
        @if ($errors->has('deadline') )
        <span>{{ $errors->first('deadline') }}</span><br>
        @endif
        詳細　　：<textarea name="detail">{{ $task->detail }}</textarea><br>
        @if ($errors->has('detail') )
        <span>{{ $errors->first('detail') }}</span><br>
        @endif
        <input type="submit" value="編集">
    </form>
</body>
</html>