@extends('layouts.app')

@section('content')

    <h1>id = {{ $task->id }} の仕事詳細ページ</h1>

    <table class="table table-bordered">
        <tr>
            <th>id</th>
            <td>{{ $task->id }}</td>
        </tr>
        <tr>
            <th>メッセージ</th>
            <td>{{ $task->content }}</td>
        </tr>
    </table>
    
    {!! link_to_route('tasks.edit', 'この仕事を編集', ['task' => $task->id], ['class' => 'btn btn-light']) !!}

@endsection