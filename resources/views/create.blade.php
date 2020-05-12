<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>タスク作成</title>
    <link rel="stylesheet" href="">
</head>
<body>
    <form action="{{route('task.store')}}" method="POST">
        @csrf
        タスク名：<input type="text" name="name" value="" placeholder=""><br>
        @if ($errors->has('name') )
        <span>{{ $errors->first('name') }}</span><br>
        @endif
        期日　　：<input type="date" name="deadline" value="" placeholder=""><br>
        @if ($errors->has('deadline') )
        <span>{{ $errors->first('deadline') }}</span><br>
        @endif
        詳細　　：<textarea name="detail"></textarea><br>
        @if ($errors->has('detail') )
        <span>{{ $errors->first('detail') }}</span><br>
        @endif
        <input type="submit" value="登録">
    </form>
</body>
</html>