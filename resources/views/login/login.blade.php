@extends('layouts.admin')

@section('title', '登录')

@section('content')
        <h3>欢迎使用 hAdmin</h3>
        <form class="m-t" role="form" action="{{url('doLogin')}}" method="post">
            @csrf
            <div class="form-group">
                <input type="text" name="admin_name" class="form-control" placeholder="用户名" required="">
            </div>
            <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="密码" required="">
            </div>
            <button type="submit" class="btn btn-primary block full-width m-b">登 录</button>
        </form>
@endsection