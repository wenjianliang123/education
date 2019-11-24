@extends('layouts.admin1')
@section('content')
    <div class="form-inline">
        <form action="{{url('/ActivityController/activity_show')}}" method="get">
            活动标题：<input type="text" name="activity_title" id="" class="form-control" style="width: auto" value="">
            是否删除：
            未删除<input type="radio" name="is_del" id="" value="1">
            已删除<input type="radio" name="is_del" id="" value="2">
            <input type="submit" class="btn btn-success" value="搜索">
        </form>
    </div>

    <table border="1" class="table">
        <tr>
            <td>精彩活动ID</td>
            <td>精彩活动标题</td>
            <td>精彩活动内容</td>
            <td>创建时间</td>
            <td>浏览次数</td>
            <td>是否删除</td>
            <td>操作</td>
        </tr>
        @foreach($activity_info as $v)
            <tr>
                <td>{{$v['activity_id']}}</td>
                <td>{{$v['activity_title']}}</td>
                <td>{{$v['activity_content']}}</td>
                <td>{{date("Y-m-d H:i:s",$v['activity_time'])}}</td>
                <td>{{$v['activity_num']}}</td>
                <td>{{$v['is_del']}}</td>
                <td>
                    <a class="btn btn-info" href="{{url('/ActivityController/activity_update_view',['activity_id'=>$v['activity_id']])}}">修改</a>
                    <a class="btn btn-danger" href="{{url('/ActivityController/activitydel',['activity_id'=>$v['activity_id']])}}">删除</a>

                </td>

            </tr>
        @endforeach

    </table>
    {{ $activity_info->links() }}
    {{--{{ $data->appends(['goods_name' => $goods_name])->links() }}--}}
    <script>
        $(document).on('click','#shanchu',function () {
            var _this=$(this);
            var url="{{asset('/ActivityController/activityupdate')}}";
            var activity_id=$(_this).attr('activity_id');
//        alert(activity_id);return;
            $.ajax({
                url:url,
                type:'post',
                data:{activity_id:activity_id},
                datatype:'json',
                success:function(res){
                    console.log(res);
                }
            })
        });



    </script>

@endsection