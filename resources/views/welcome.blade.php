@extends('layouts.app')

@section('content')
    @if (Auth::check())
        {{ Auth::user()->name}}<span>さん、ようこそ。</span>
        
    <h1>タスク一覧</h1>
    
        <table class="table table-striped">
            
            <thead>
                <tr>
                    <th>id</th>
                    <th>ステータス</th>
                    <th>タスク</th>
                </tr>
            </thead>
            
            <tbody>
                @foreach($tasks as $task)
                <tr>
                    <td>{!! link_to_route('tasks.show', $task->id, ['id' => $task->id]) !!}</td>
                    <td>{{ $task->status }}
                    <td>{{ $task->content }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    
     {!! link_to_route('tasks.create','新規タスク登録',[],['class' => 'btn btn-primary']) !!}

    @else
    
        <div class="center jumbotron">
            
            <div class="text-center">
                <h1>タスク管理 WebApp</h1>
                {!! link_to_route('signup.get', '新規ユーザー登録はこちら', [], ['class' => 'btn btn-lg btn-primary']) !!}
            </div>
            
        </div>
        
    @endif
    
@endsection