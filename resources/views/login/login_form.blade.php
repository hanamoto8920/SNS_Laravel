@extends('layout')
@section('title', 'ログインフォーム')
@section('content')
<div class="col-md-5 col-md-offset-3">
  @if ($errors->any())
  <div class="alert alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
  @endif
  <form action="{{ route('login')}}" method="post" class="form">
    @csrf
    <div class="form-group">
      <label>メールアドレス</label>
      <input type="email" class="form-control" placeholder="メールを入力して下さい。">
    </div>
    <div class="form-group">
      <label>パスワード</label>
      <input type="password" class="form-control" placeholder="パスワードを入力して下さい。">
    </div>
    <button class="btn btn-info btn-lg btn-block" type="submit">ログイン</button>
  </form>
</div>
@endsection