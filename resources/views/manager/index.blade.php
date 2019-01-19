@extends('common.mlayout')

@section('content')


    <!-- 自定义内容区域 -->
    <div class="panel panel-default">
        <div class="panel-heading">所有问题列表</div>
        <table class="table table-striped table-hover table-responsive">
            <thead>
            <tr>
                <th>序号</th>
                <th>学生姓名</th>
                <th>问题类别</th>
                <th>问题状态</th>
                <th width="120">操作</th>
            </tr>
            </thead>
            <tbody>
            <script>i=1;</script>
            @foreach($cars as $car)
                <tr>
                    <th scope="row"><script>document.write(i,' ');i++;</script></th>
                    <td>{{$car->username}}</td>
                    <td>{{$car->carcontract}}</td>
                    <td>{{$car->cliname}}</td>
                    <td>
                        <a href="{{url('manager/detail',['id'=>$car->username])}}">详情</a>
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