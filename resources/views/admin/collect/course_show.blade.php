@extends('layouts.admin1')
@section('content')
<?php
session_start();
$_SESSION["user_id"]="20148024";
?>
<table border="1">
    @foreach($course_info as $v)

    <tr>

        <td> <input type="checkbox" name="course_id_arr" id="" value="{{$v['course_id']}}"> 课程id </td>
        <td>课程名称</td>
        <td>教师id</td>
        <td>操作</td>
    </tr>

    <tr>
        <td class="course_id">
            {{$v['course_id']}}
        </td>
        <td>
            <input type="hidden" name="user_id" value="321">
            {{$v['course_name']}}
        </td>
        <td>{{$v['lecturer_id']}}</td>
        <td>
            <a href="{{url('/CollectController/create_favorite_view',['course_id'=>$v['course_id'],'user_id'=>$_SESSION['user_id']])}}">收藏</a>

            <input type="hidden" name="u_id" class="u_id" value="{{$_SESSION['user_id']}}" id="">
            <input type="button" value="购买" id="buy">
        </td>
    </tr>
    @endforeach
</table>
@endsection
<script src="/jquery.min.js"></script>
<script>



    $(document).on('click',"#buy",function () {
        var u_id=$(".u_id").val();
        var url ="{{url('OrderController/create_order_and_detail')}}";

        //jquery获取复选框值
        var course_id_array =[];//定义一个数组
        $('input[name="course_id_arr"]:checked').each(function(){//遍历每一个名字为interest的复选框，其中选中的执行函数
            course_id_array.push($(this).val());//将选中的值添加到数组course_id_array中
        });
//            window.location.href='ssdv';
        $.ajax({
            url:url,
            data: {course_id_array: course_id_array, u_id: u_id},
            type: 'post',
            dataType: 'json',
            success: function (res) {
                console.log(res);
//            if(res.code==1){
//                alert(res.msg);
//            }else{
//                alert(res.msg);
//            }
            }
        })
    });
//    alert(courser_id);





</script>



