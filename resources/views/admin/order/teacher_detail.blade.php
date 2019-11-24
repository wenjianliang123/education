@extends('layouts.admin1')
@section('content')
    <table blect="1" class="table">
        <tr>
            <td>讲师ID</td>
            <td>讲师名称</td>
            <td>讲师简介</td>
            <td>授课风格</td>
        </tr>
        @foreach($lecturer_info as $v)
            <tr>
                <td>{{$v->lecturer_id}}</td>
                <td>{{$v->lect_name}}</td>
                <td>{{$v->lect_resume}}</td>
                <td>{{$v->lect_style}}</td>
            </tr>
        @endforeach

    </table>

    <script>

    </script>

@endsection