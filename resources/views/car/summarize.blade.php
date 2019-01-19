@extends('common.layouts')

@section('content')
    <div class="col-sm-8 blog-main">
        <form action="{{ url('car/savesummarize') }}" method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <label>标题</label>
                <input name="Summarize[title]" type="text" class="form-control"  placeholder="请在此处输入标题">
            </div>
            <div class="form-group">
                <label>时间</label>
                <input name="Summarize[date]" type="text" class="form-control" value="{{$now}}">
            </div>
            <div class="form-group">
                <label>内容</label>
                <textarea id="Summarize[content]"  style="height:400px;max-height:500px;" name="Summarize[content]" class="form-control" placeholder="请在此处输入总结内容"></textarea>
            </div>
            <button type="submit" class="btn btn-default">提交</button>
        </form>
        <br>

    </div>
@stop