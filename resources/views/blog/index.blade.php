@extends('main')
@section('title',"| Blog")
@section('content')
    <div class='row'>

        @foreach($posts as $post)
            <div class="col-md-8 col-md-offset-2">
                <h1>{{ $post->title }}</h1>
                <h5>Published: {{date('M j, Y H:i',strtotime($post->created_at)) }}</h5>

                <p>{{substr($post->body,0,250)}}{{ strlen($post->body) > 50 ? "..." : "" }}</p>

                <a href="{{ route('blog.single', $post->slug) }}" class="btn btn-primary">Read More</a>
                <hr>
            </div>
        @endforeach
        <div class="text-center">
            {!! $posts->links(); !!}
        </div>

    </div>
@endsection