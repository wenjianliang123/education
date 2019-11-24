@extends('layouts.admin1')
@section('content')
    <div class="form-inline">
        <form action="{{url('/ExamController/exam_show')}}" method="get">
            考试标题：<input type="text" class="form-control" style="width: auto" name="exam_title" id="" value="{{$exam_title}}">
            考试内容：<input type="text" class="form-control" style="width: auto" name="exam_content" id="" value="{{$exam_content}}">
            <input type="submit" class="btn btn-success" value="搜索">
        </form>
    </div>
    <table border="1" class="table">
        <tr>
            <td>考试ID</td>
            <td>考试标题</td>
            <td>考试内容</td>
            <td>创建时间</td>
            <td>浏览次数</td>
            <td>是否删除</td>
            <td>操作</td>
        </tr>
        @foreach($exam_info as $v)
            <tr>
                <td>{{$v['exam_id']}}</td>
                <td>{{$v['exam_title']}}</td>
                <td>{{$v['exam_content']}}</td>
                <td>{{date("Y-m-d H:i:s",$v['exam_time'])}}</td>
                <td>{{$v['exam_num']}}</td>
                <td>{{$v['is_del']}}</td>
                <td>
                    <a class="btn btn-info" href="{{url('/ExamController/exam_update_view',['exam_id'=>$v['exam_id']])}}">修改</a>
                    <a class="btn btn-danger" href="{{url('/ExamController/examdel',['exam_id'=>$v['exam_id']])}}">删除</a>

                </td>

            </tr>
        @endforeach

    </table>
    {{ $exam_info->appends(['exam_content' => $exam_content,'exam_title'=>$exam_title])->links() }}
    <script>
        $(document).on('click','#shanchu',function () {
            var _this=$(this);
            var url="{{asset('/examController/examupdate')}}";
            var exam_id=$(_this).attr('exam_id');
//        alert(exam_id);return;
            $.ajax({
                url:url,
                type:'post',
                data:{exam_id:exam_id},
                datatype:'json',
                success:function(res){
                    console.log(res);
                }
            })
        });



    </script>

@endsection