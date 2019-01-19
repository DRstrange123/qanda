@extends('common.mlayout')

@section('content')

    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span12">
                <form class="form-horizontal" method="post" action="">
                    @csrf
                    <div class="col-sm-5">
                        <input type="text" name="Car[month]" value="" class="form-control" id="month" placeholder="请输入要查看的月份">
                    </div>
                    <div class="col-sm-5">
                        <button type="submit" class="btn btn-primary">查询</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="row"></div>
    <br/>
    <div class="row"></div>

    <script>i=1;</script>
    <div class="panel panel-default">
        <div class="panel-heading">月销售排行榜</div>
        <table class="table table-striped table-hover table-responsive">
            <thead>
            <tr>
                <th>排名</th>
                <th>销售人员</th>
                <th>销售数量</th>
                <th>月份</th>
            </tr>
            </thead>
            <tbody>
            @foreach($cars as $car)
                <tr>
                    <th scope="row"><script>document.write(i,' ');i++;</script></th>
                    <td>{{$car->username}}</td>
                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$car->user_count}}</td>
                    <td>&nbsp;&nbsp;{{$car->month}}</td>
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