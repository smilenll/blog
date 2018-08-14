@extends('main')
@section('title',"| $post->title ")
@section('content')
    <div class='row'>
        <div class="col-md-8 col-md-offset-2">
            <h1>{{ $post->title }}</h1>
            <p>{{$post->body}}</p>
            <hr>
            <p>Posted in: {{$post->category->name}}</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h3>{{$post->comments()->count()}} Comments</h3>
            @foreach($post->comments as $comment)
                <div class='comment'>
                    <div class="author-info">
                        <img src="{{"https://www.gravatar.com/avatar/" .md5(strtolower( trim($comment->email)))}}"
                             class="author-image"/>
                        <div class="author-name">
                            <h4>{{$comment->name}}</h4>
                            <td>{{date('M j, Y',strtotime($comment->created_at))}}</td>

                        </div>
                    </div>

                    <div classs="comment-content">
                        {{$comment->comment}};
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row">
            <div id="comment-form" class="col-md-8 col-md-offset-2">
                {{Form::open(['route' => ['comments.store', $post->id], 'method' => 'POST'])}}
                <div class='row'>
                    <div class="col-md-6">
                        {{Form::label('name','Names:')}}
                        {{Form::text('name',null, ['class' => 'form-control'])}}
                    </div>
                    <div class="col-md-6">
                        {{Form::label('email','Email:')}}
                        {{Form::text('email',null, ['class' => 'form-control'])}}
                    </div>
                    <div id="col-md-12">
                        {{Form::label('comment','Add comment:')}}
                        {{Form::textarea('comment',null, ['class' => 'form-control', 'rows' => '5'])}}
                    </div>
                    {{Form::submit('ADD Comment', ['class'=> 'btn btn-primary btn-h1'])}}
                    {{Form::close()}}
                </div>
                <div class="row">
                    <div class="col-md-12">
                    </div>
                </div>

            </div>


        </div>
    </div>
@endsection