@extends('common.layouts')

@section('content')
    @include('common.validator')
    <!-- 自定义内容区域 -->
    <div class="panel panel-default">
        <div class="panel-heading">新增车辆销售</div>
        <div class="panel-body">
            @include('car._form')
        </div>
    </div>
@stop