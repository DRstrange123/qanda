@extends('common.layouts')

@section('content')
        <div class="row">
            <div class="col-sm-8 blog-main">
                <div>
                    @foreach($summarizes as $summarize)
                    <div class="blog-post">
                        <h4 class="blog-post-title"><a href="/posts/62" >{{$summarize->title}}</a></h4>
                        <p class="blog-post-meta">{{$summarize->date}}</p>

                        <p>{{$summarize->content}}
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
        <!-- 分页  -->
        <div>
            <div class="pull-right">
                {{$summarizes->render()}}
            </div>
        </div>
@stop