@extends('main')
@section('title','| Homepage')


@section('content')
<div class="row">
        <div class="col-lg-12">
            <div class="jumbotron">
                <h1>Welcome to my BLOG</h1>
                <p class="lead">alos</p>
                <p><a class="btn btn-primary btn-lg" href="#" role="button">Popular Posts</a></p>
            </div>
        </div>
    </div>
    <div class="row">
        @foreach($posts as $post)
        <div class="col-md-8">
             <div class="post">
                 <h3>{{$post->title}}</h3>
                 <p>{{substr($post->body,0,300)}}{{strlen($post->body) > 300 ? '...' : ''}}</p>
                <a href="{{url('blog/'.$post->slug)}}" class="btn btn-primary">Read more</a>
             </div>
             <hr>
         </div>
        @endforeach
        <div class="col-md-3 col-md-offset-1">

        </div>
    </div>
@endsection