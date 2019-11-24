<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>后台管理</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="/css/font.css">
    <link rel="stylesheet" href="/css/xadmin.css">
    <link rel="stylesheet" href="https://cdn.bootcss.com/Swiper/3.4.2/css/swiper.min.css">
    <script type="text/javascript" src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.bootcss.com/Swiper/3.4.2/js/swiper.jquery.min.js"></script>
    <script src="/lib/layui/layui.js" charset="utf-8"></script>
    <script type="text/javascript" src="/js/xadmin.js"></script>

</head>
<body>
<!-- 顶部开始 -->
<div class="container">
    <div class="logo"><a href="/index.html">X-ADMIN V1.1</a></div>
    <div class="open-nav"><i class="iconfont">&#xe699;</i></div>
    <ul class="layui-nav right" lay-filter="">
        <li class="layui-nav-item">
            <a href="javascript:;">admin</a>
            <dl class="layui-nav-child"> <!-- 二级菜单 -->
                <dd><a href="">个人信息</a></dd>
                <dd><a href="">切换帐号</a></dd>
                <dd><a href="/login.html">退出</a></dd>
            </dl>
        </li>
        <li class="layui-nav-item"><a href="/">前台首页</a></li>
    </ul>
</div>
<!-- 顶部结束 -->
<!-- 中部开始 -->
<div class="wrapper">
    <!-- 左侧菜单开始 -->
    <div class="left-nav">
        <div id="side-nav">
            <ul id="nav">
                <li class="list" current>
                    <a href="./index.html">
                        <i class="iconfont">&#xe761;</i>
                        欢迎页面
                        <i class="iconfont nav_right">&#xe697;</i>
                    </a>
                </li>
                <li class="list">
                    <a href="javascript:;">
                        <i class="iconfont">&#xe70b;</i>
                        用户管理
                        <i class="iconfont nav_right">&#xe697;</i>
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <a href="member-list.html">
                                <i class="iconfont">&#xe6a7;</i>
                                用户列表
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="list" >
                    <a href="javascript:;">
                        <i class="iconfont">&#xe6a3;</i>
                        管理员管理
                        <i class="iconfont nav_right">&#xe697;</i>
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <a href="./category.html">
                                <i class="iconfont">&#xe6a7;</i>
                                管理员添加
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="list" >
                    <a href="javascript:;">
                        <i class="iconfont">&#xe6a3;</i>
                        咨询模块
                        <i class="iconfont nav_right">&#xe697;</i>
                    </a>
                    <ul class="sub-menu" style="display:none">
                        <li>
                            <a href="{{url('/InformationController/informationshow')}}">
                                <i class="iconfont">&#xe6a7;</i>
                                咨询列表

                            </a>
                        </li>
                        <li>
                            <a href="{{url('/informationadd_view')}}">
                                <i class="iconfont">&#xe6a7;</i>
                                咨询添加
                            </a>
                        </li>
                        <li>
                            <a href="{{url('/ExamController/exam_show')}}">
                                <i class="iconfont">&#xe6a7;</i>
                                考试列表
                            </a>
                        </li>
                        <li>
                            <a href="{{url('/ExamController/exam_add_view')}}">
                                <i class="iconfont">&#xe6a7;</i>
                                考试添加
                            </a>
                        </li>
                        <li>
                            <a href="{{url('/ActivityController/activity_show')}}">
                                <i class="iconfont">&#xe6a7;</i>
                                活动列表
                            </a>
                        </li>
                        <li>
                            <a href="{{url('/ActivityController/activity_add_view')}}">
                                <i class="iconfont">&#xe6a7;</i>
                                活动添加
                            </a>
                        </li>
                    </ul>

                </li>
                <li class="list" >
                    <a href="javascript:;">
                        <i class="iconfont">&#xe6a3;</i>
                        管理员管理
                        <i class="iconfont nav_right">&#xe697;</i>
                    </a>
                    <ul class="sub-menu" style="display:none">
                        <li>
                            <a href="./banner-list.html">
                                <i class="iconfont">&#xe6a7;</i>
                                轮播列表
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="list" >
                    <a href="javascript:;">
                        <i class="iconfont">&#xe6a3;</i>
                        问答管理
                        <i class="iconfont nav_right">&#xe697;</i>
                    </a>
                    <ul class="sub-menu" style="display:none">
                        <li>
                            <a href="./echarts5.html">
                                <i class="iconfont">&#xe6a7;</i>
                                问题添加
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="list" >
                    <a href="javascript:;">
                        <i class="iconfont">&#xe6a3;</i>
                        讲师管理
                        <i class="iconfont nav_right">&#xe697;</i>
                    </a>
                    <ul class="sub-menu" style="display:none">
                        <li>
                            <a href="./banner-list.html">
                                <i class="iconfont">&#xe6a7;</i>
                                讲师添加
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="list" >
                    <a href="javascript:;">
                        <i class="iconfont">&#xe6a3;</i>
                        课程管理
                        <i class="iconfont nav_right">&#xe697;</i>
                    </a>
                    <ul class="sub-menu" style="display:none">
                        <li>
                            <a href="{{url('CollectController/select_course')}}">
                                <i class="iconfont">&#xe6a7;</i>
                                课程列表
                            </a>
                        </li>
                        <li>
                            <a href="{{url('CollectController/favorite_list')}}">
                                <i class="iconfont">&#xe6a7;</i>
                                收藏夹列表
                            </a>
                        </li>
                        <li>
                            <a href="{{url('CollectController/collect_list')}}">
                                <i class="iconfont">&#xe6a7;</i>
                                我的收藏列表
                            </a>
                        </li>
                        <li>
                            <a href="{{url('NoticeController/notice_show_view')}}">
                                <i class="iconfont">&#xe6a7;</i>
                                课程公告列表
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <!-- 左侧菜单结束 -->
    <!-- 右侧主体开始 -->
    <div id="page-wrapper">
        <div class="container">
            @yield('content')
        </div>
    </div>
    <!-- 右侧主体结束 -->
</div>
<!-- 中部结束 -->
<!-- 底部开始 -->
<div class="footer">
    <div class="copyright">Copyright ©2017 x-admin v2.3 All Rights Reserved. 本后台系统由X前端框架提供前端技术支持</div>
</div>
<!-- 底部结束 -->
<!-- 背景切换开始 -->
<div class="bg-changer">
    <div class="swiper-container changer-list">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><img class="item" src="/images/1.jpg" alt=""></div>
            <div class="swiper-slide"><img class="item" src="/images/2.jpg" alt=""></div>
            <div class="swiper-slide"><img class="item" src="/images/3.jpg" alt=""></div>
            <div class="swiper-slide"><img class="item" src="/images/4.jpg" alt=""></div>
            <div class="swiper-slide"><img class="item" src="/images/5.jpg" alt=""></div>
            <div class="swiper-slide"><img class="item" src="/images/6.jpg" alt=""></div>
            <div class="swiper-slide"><img class="item" src="/images/7.jpg" alt=""></div>
            <div class="swiper-slide"><img class="item" src="/images/8.jpg" alt=""></div>
            <div class="swiper-slide"><img class="item" src="/images/9.jpg" alt=""></div>
            <div class="swiper-slide"><img class="item" src="/images/10.jpg" alt=""></div>
            <div class="swiper-slide"><img class="item" src="/images/a.jpg" alt=""></div>
            <div class="swiper-slide"><img class="item" src="/images/b.jpg" alt=""></div>
            <div class="swiper-slide"><img class="item" src="/images/c.jpg" alt=""></div>
            <div class="swiper-slide"><img class="item" src="/images/d.jpg" alt=""></div>
            <div class="swiper-slide"><img class="item" src="/images/e.jpg" alt=""></div>
            <div class="swiper-slide"><img class="item" src="/images/f.jpg" alt=""></div>
            <div class="swiper-slide"><img class="item" src="/images/g.jpg" alt=""></div>
            <div class="swiper-slide"><img class="item" src="/images/h.jpg" alt=""></div>
            <div class="swiper-slide"><img class="item" src="/images/i.jpg" alt=""></div>
            <div class="swiper-slide"><img class="item" src="/images/j.jpg" alt=""></div>
            <div class="swiper-slide"><img class="item" src="/images/k.jpg" alt=""></div>
            <div class="swiper-slide"><span class="reset">初始化</span></div>
        </div>
    </div>
    <div class="bg-out"></div>
    <div id="changer-set"><i class="iconfont">&#xe696;</i></div>
</div>
<!-- 背景切换结束 -->
<script>
    //百度统计可去掉
    var _hmt = _hmt || [];
    (function() {
        var hm = document.createElement("script");
        hm.src = "https://hm.baidu.com/hm.js?b393d153aeb26b46e9431fabaf0f6190";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
    })();
</script>
</body>
</html>
