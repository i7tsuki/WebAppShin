<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>タスク一覧</title>
    <link rel="stylesheet" href="">
</head>
<body>
    <div>
        <a href="{{ route('task.create') }}">タスクの追加</a>
    </div>
    <table>
        <tr>
            <th>タスク名</th>
            <th>詳細</th>
            <th>期日</th>
        </tr>
        @foreach ($list as $task)
        <tr>
            <td>{{ $task->idl }}</td>
            <td>
            	<a href="{{ route('task.detail', ['id' => $task->id]) }}">
                {{ $task->name }}
            	</a>
            </td>
            <td>{{ $task->detail }}</td>
            <td>{{ $task->deadline }}</td>
            <td><a href="{{ route('task.edit', ['id' => $task->id]) }}">編集</a></td>
            {{-- リンクを追加 --}}
            <td>
                <form method="post" action="{{ route('task.delete') }}">
                    @csrf
                    <input type="hidden" name="id" value="{{ $task->id }}">
                    <input type="submit" name="" value="削除">
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>