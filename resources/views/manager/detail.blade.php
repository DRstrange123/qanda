@extends('common.mlayout')

@section('content')


    <!-- 自定义内容区域 -->
    {{--<div class="panel panel-default">--}}
        {{--<div class="panel-heading">查看详情</div>--}}
        {{--<table class="table table-striped table-hover table-responsive">--}}
            {{--<thead>--}}
            {{--<tr>--}}
                {{--<th>序号</th>--}}
                {{--<th>售出车型</th>--}}
                {{--<th>数量</th>--}}
                {{--<th>成交价</th>--}}
                {{--<th>客户姓名</th>--}}
                {{--<th>客户电话</th>--}}
                {{--<th>合同号</th>--}}
            {{--</tr>--}}
            {{--</thead>--}}
            {{--<tbody>--}}
            {{--<script>i=1;</script>--}}
            {{--@foreach($cars as $car)--}}
                {{--<tr>--}}
                    {{--<th scope="row"><script>document.write(i,' ');i++;</script></th>--}}
                    {{--<td>{{$car->carnum}}</td>--}}
                    {{--<td>{{$car->num}}</td>--}}
                    {{--<td>{{$car->carturnover}}</td>--}}
                    {{--<td>{{$car->cliname}}</td>--}}
                    {{--<td>{{$car->clitel}}</td>--}}
                    {{--<td>{{$car->carcontract}}</td>--}}
                {{--</tr>--}}
            {{--@endforeach--}}
            {{--</tbody>--}}
        {{--</table>--}}
    {{--</div>--}}

    <div class="panel panel-default">
        <div class="panel-heading">查看详情</div>

        <table class="table table-bordered table-striped table-hover ">
            @foreach($cars as $car)
            <tbody>
            <tr>
                <td width="50%">ID</td>
                <td>1</td>
            </tr>
            <tr>
                <td>问题类别</td>
                <td>{{$car->clitel}}</td>
            </tr>
            <tr>
                <td>问题状态</td>
                <td>{{$car->carnum}}</td>
            </tr>
            <tr>
                <td>问题详情</td>
                <td>{{$car->carturnover}}</td>
            </tr>
            </tbody>
            @endforeach
        </table>
    </div>
    <!-- 分页  -->
    <div>
        <div class="pull-right">
            {{$cars->render()}}
        </div>
    </div>
@stop