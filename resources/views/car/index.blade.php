@extends('common.layouts')

@section('content')

    @include('common.message')

    <!-- 自定义内容区域 -->
    <div class="panel panel-default">
        <div class="panel-heading">汽车销售列表</div>
       <table class="table table-striped table-hover table-responsive">
            <thead>
            <tr>
                <th>ID</th>
                <th>车型</th>
                <th>数量</th>
                <th>客户姓名</th>
                <th>售出日期</th>
                <th width="120">操作</th>
            </tr>
            </thead>
            <tbody>
            @foreach($cars as $car)
            <tr>
                <th scope="row">{{$car->id}}</th>
                <td>{{$car->carnum}}</td>
                <td>{{$car->num}}</td>
                <td>{{$car->cliname}}</td>
                <td>{{$car->year}}-{{$car->month}}-{{$car->day}}</td>
                <td>
                    <a href="{{url('car/detail',['id'=>$car->id])}}">详情</a>
                    <a href="{{url('car/update',['id'=>$car->id])}}">修改</a>
                    <a href="{{url('car/delete',['id'=>$car->id])}}" onclick="if (confirm('确定要删除吗？') == false) return false;">删除</a>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <!-- 分页  -->
    <div>
        <div class="pull-right">
            {{$cars->render()}}
        </div>
    </div>
@stop