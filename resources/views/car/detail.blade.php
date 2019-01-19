@extends('common.layouts')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">车辆销售详情</div>

        <table class="table table-bordered table-striped table-hover ">
            <tbody>
            <tr>
                <td width="50%">ID</td>
                <td>{{$car->id}}</td>
            </tr>
            <tr>
                <td>客户姓名</td>
                <td>{{$car->cliname}}</td>
            </tr>
            <tr>
                <td>客户电话</td>
                <td>{{$car->clitel}}</td>
            </tr>
            <tr>
                <td>客户来源</td>
                <td>{{$car->clisour}}</td>
            </tr>
            <tr>
                <td>客户地址</td>
                <td>{{$car->cliadd}}</td>
            </tr>
            <tr>
                <td>车型</td>
                <td>{{$car->carnum}}</td>
            </tr>
            <tr>
                <td>售出数量</td>
                <td>{{$car->num}}</td>
            </tr>
            <tr>
                <td>合同号</td>
                <td>{{$car->carcontract}}</td>
            </tr>
            <tr>
                <td>成交价</td>
                <td>{{$car->carturnover}}</td>
            </tr>
            <tr>
                <td>销售顾问</td>
                <td>{{$car->carconsultant}}</td>
            </tr>
            <tr>
                <td>成交时间</td>
                <td>2018-05-13</td>
            </tr>
            </tbody>
        </table>
    </div>
@stop