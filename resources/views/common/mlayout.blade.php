<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>校园问题反馈@yield('title')</title>
    <!-- Bootstrap CSS 文件 -->
    <link rel="stylesheet" href="{{asset('static/bootstrap/css/bootstrap.min.css')}}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    @section('style')

    @show
</head>
<body>

<!-- 头部 -->
@section('header')
    <div class="jumbotron">
        <div class="container">
            <h2>校园创新应用大赛</h2>

            <p> - 校园问题反馈</p>
        </div>
    </div>
@show

<!-- 中间内容区局 -->
<div class="container">
    <div class="row">

        <!-- 左侧菜单区域   -->
        <div class="col-md-3">
            @section('leftmenu')
                <div class="list-group">
                    <a href="{{url('manager/index')}}" class="list-group-item
                    {{Request::getPathInfo()=='/manager/index' ? 'active':''}}">所有问题</a>
                    <a href="{{url('manager/daylist')}}" class="list-group-item
                    {{Request::getPathInfo()=='/manager/daylist' ? 'active':''}}">食堂问题</a>
                    <a href="{{url('manager/weeklist')}}" class="list-group-item
                    {{Request::getPathInfo()=='/manager/weeklist' ? 'active':''}}">宿舍问题</a>
                    <a href="{{url('manager/monthlist')}}" class="list-group-item
                    {{Request::getPathInfo()=='/manager/monthlist' ? 'active':''}}">教务问题</a>
                </div>
            @show
        </div>

        <!-- 右侧内容区域 -->
        <div class="col-md-9">

            @yield('content')

        </div>
    </div>
</div>

<!-- 尾部 -->
@section('footer')
    <div class="jumbotron" style="margin:0;">
        <div class="container">
            <span >  @2019 北京大学软件与微电子学院</span>
        </div>
    </div>
@show

<!-- jQuery 文件 -->
<script src="{{asset('static/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap JavaScript 文件 -->
<script src="{{asset('static/bootstrap/js/bootstrap.min.js')}}"></script>

@section('javascript')

@show

</body>
</html>