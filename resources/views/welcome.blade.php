@extends('layouts.app')

@section('content')
    <div class="center jumbotron">
        <div class="text-center">
            <h1>こちらタスク管理 WebAppです。</h1>
            {!! link_to_route('signup.get', '新規ユーザー登録はこちら', [], ['class' => 'btn btn-lg btn-primary']) !!}
          
        </div>
    </div>
@endsection

  //CRUD get　ルータ名 signup.get　URI signup　コントローラー名 Auth\RegisterController　アクション名 showRegistrationForm　