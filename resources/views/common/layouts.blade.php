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
        <div id="app">
            <div class="container">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                            <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
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
                    <a href="{{url('car/create')}}" class="list-group-item
                    {{Request::getPathInfo()=='/car/create' ? 'active':''}}">新增销售</a>
                    <a href="{{url('car/index')}}" class="list-group-item
                    {{Request::getPathInfo()=='/car/index' ? 'active':''}}">历史销售</a>
                    <a href="{{url('car/summarize')}}" class="list-group-item
                    {{Request::getPathInfo()=='/car/summarize' ? 'active':''}}">每日总结</a>
                    <a href="{{url('car/summarizelist')}}" class="list-group-item
                    {{Request::getPathInfo()=='/car/summarizelist' ? 'active':''}}">历史总结</a>
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
            <span >  @2018 北京大学软件与微电子学院</span>
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