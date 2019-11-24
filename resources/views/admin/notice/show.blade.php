@extends('layouts.admin1')
@section('content')

        <form action="{{url('/NoticeController/notice_show_view')}}" method="get">
            <div class="form-inline">
            公告内容：<input type="text"  class="form-control" style="width: auto" name="notice" id="" value="">
            课程：<select name="course_id" class="c_id form-control" id="" style="width: auto;">
                    <option value="">请选择课程</option>

                @foreach($course_notice as $v)
                    <option class="course_id" value="{{$v['course_id']}}">{{$v['course_name']}}</option>
                @endforeach
            </select>
            <input type="submit" class="btn btn-success" value="搜索">
            </div>
        </form>


    <table border="1" class="table">
        <tr>
            <td>课程公告ID</td>
            <td>课程名称</td>
            <td>课程公告内容</td>
            <td>创建时间</td>
            <td>是否删除</td>
            <td>操作</td>
        </tr>
        @foreach($course_notice as $v)
            <tr>
                <td>{{$v['notice_id']}}</td>
                <td>{{$v['course_name']}}</td>
                <td>{{$v['notice']}}</td>
                <td>{{date("Y-m-d H:i:s",$v['create_time'])}}</td>
                <td>{{$v['is_del']}}</td>
                <td>
                    <a class="btn btn-info" href="{{url('/NoticeController/notice_update_view',['notice_id'=>$v['notice_id']])}}">修改</a>
                    <a class="btn btn-danger" href="{{url('/NoticeController/noticedel',['notice_id'=>$v['notice_id']])}}">删除</a>
                </td>
            </tr>
        @endforeach

    </table>

    {{ $course_notice->links() }}

    <script>

    </script>

@endsection