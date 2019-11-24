@extends('layouts.admin1')
@section('content')
    <form>
        <div class="form-inline">
            <label for="exampleInputEmail1" ><b style="font-size: 18px;color: blue">咨询标题</b></label>
            <input type="text"  name="information_title" value="{{$information_info['information_title']}}" class="form-control information_title"  placeholder="咨询标题" style="width: auto">
        </div>


        <input type="hidden" name="information_id" class="information_id" value="{{$information_info['information_id']}}">
        <div class="form-inline">
            <label for="exampleInputEmail1" ><b style="font-size: 18px;color: blue">咨询图片</b></label>


            <input type="file" name="file" id='file' >
            <img src="{{url($information_info['information_photo'])}}" id='img_show' style="width: 300px;">
        </div>




        <div class="form-inline">
            <label for="exampleInputPassword1"><b style="font-size: 16px;color: blue">咨询内容</b></label>

            <script id="container"  name="information_content" class="information_content" type="text/plain">
                {{$information_info['information_content']}}
            </script>

        </div>
        <div class="form-inline">
            <label for="exampleInputEmail1" ><b style="font-size: 18px;color: blue">浏览次数</b></label>
            <input type="number"  name="information_num" value="{{$information_info['information_num']}}" class="form-control information_num"  placeholder="浏览次数" style="width: auto">
        </div>

        <input type="button" value="修改咨询" class="information_add form-group">

    </form>

    {{--富文本编辑器--}}
    <!-- 配置文件 -->
    <script type="text/javascript" src="{{asset('/ueditor/ueditor.config.js')}}"></script>
    <!-- 编辑器源码文件 -->
    <script type="text/javascript" src="{{asset('/ueditor/ueditor.all.js')}}"></script>
    <!-- 实例化编辑器 -->
    <script type="text/javascript">
        var ue = UE.getEditor('container');
    </script>
    {{--上传图片--}}

    <script src="https://cdn.jsdelivr.net/npm/jquery@1.12.4/dist/jquery.min.js"></script>
    <script type="text/javascript">
        //全局定义
        var base64Str;
        $("#file").on('change',function(){
            //模拟表单对象  FormData
            var file = $('[name="file"]')[0].files[0]; //获取到文件
            var reader = new FileReader(); //h5
            reader.readAsDataURL(file); //读base编码后的url地址
            reader.onload = function()
            {
                base64Str = this.result;
                //console.log(this.result);
                $("#img_show").attr('src',this.result);
            }
        });

    </script>
    {{--添加操作--}}
    <script>

        $(document).on("click",".information_add",function () {
            var fd= new FormData();
            var information_title=$("input.information_title").val();
            var information_content=$('textarea[name="information_content"]').val();
            var information_num=$(".information_num").val();
            var information_photo=$("#file")[0].files[0];
            var information_id=$(".information_id").val();

            var url="{{asset('InformationController/informationupdate')}}";

            fd.append('information_content',information_content);
            fd.append('information_title',information_title);
            fd.append('information_num',information_num);
            fd.append('information_photo',information_photo);
            fd.append('information_id',information_id);

            $.ajax({
                url:url,
                data:fd,
                type: 'post',
                dataType: 'json',
                contentType:false,
                processData:false,
                success: function (res) {
                    console.log(res);
                    if(res.code==1){
//
                        wjl_confirm();
                    }else{
                        alert(res.msg);
                        window.history.go(-1);
                    }
                }
            })

        });

        //确定取消框
        function wjl_confirm(){
            var msg=confirm('咨询修改成功，是否返回资讯列表');
            if(msg==true){
                window.location.href="{{url('InformationController/informationshow')}}";
            }else{
                window.history.go(0);
            }
        }


    </script>
@endsection()