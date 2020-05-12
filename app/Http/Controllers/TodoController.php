<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\StoreTaskPost;
use App\Task;
// 追加：Authファサード
use Illuminate\Support\Facades\Auth;


class TodoController extends Controller
{
    public function index ()
    {
        $task = new Task;
        $list = $task->get_task();

        return view('index', [
            'title' => 'サンプル',
               'list'  => $list
        ]);
    }

    public function create ()
    {
		return view('create');
    }

    public function store (StoreTaskPost  $request)
    {
        // コメントアウト
        // 追加：バリデーション
        // $request->validate([
        //     'name' => 'required|max:100',
        //     'detail' => 'required',
        // ]);

        $input = $request->all();
        unset($input['_token']);

        // 追加：ログインしているユーザーのIDをuser_idに設定
        $input['user_id'] = Auth::id();

        // 追加：データベースへの登録
        $tasks = new Task;
        $tasks->fill($input);
        $tasks->save();

        return redirect(route('task.index'));
    }
    
    public function edit ($id)
    {
        $tasks = new Task;
        $task_data = $tasks->get_task_by_id($id);
        return view('edit', [
            'task' => $task_data,
        ]);
    }
    
    public function update (Request $request, $id)
    {
        $input = $request->all();
        unset($input['_token']);

        $tasks = new Task;
        $tasks = $tasks->find($id);
        $tasks->fill($input);
        $tasks->save();

        return redirect(route('task.index'));
    }
    

    public function show ($id)
    {
        $tasks = new Task;
        $task_data = $tasks->get_task_by_id($id);
        return view('detail', [
            'task' => $task_data,
        ]);
    }

}