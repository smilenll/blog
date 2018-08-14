@extends('main')

@section('title','| Create new POST')

@section ('stylesheets')
    {!! Html::style('css/parsley.css')  !!}
    {!! Html::style('css/select2.min.css')  !!}
@endsection
@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>Create new post</h1>
            <hr>
            {!! Form::open(array('route' => 'posts.store', 'data-parsley-validate')) !!}

            {{Form::label('title','Title:')}}
            {{Form::text('title',null,array('class' =>'form-control', 'required' => '', 'maxlength'=> '255'))}}

            {{Form::label('slug','Slug:')}}
            {{Form::text('slug',null,array('class' =>'form-control', 'required' => '', 'minlength' => '5', 'maxlength'=> '255'))}}

            {{Form::label('category_id','Category:')}}
            <select class="form-control" name="category_id">
                @foreach($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>

            {{Form::label('tags','Tags:')}}
            <select class="form-control js-example-basic-multiple" name="tags[]" multiple="multiple">
                @foreach($tags as $tag)
                    <option value="{{$tag->id}}">{{$tag->name}}</option>
                @endforeach
            </select>

            {{Form::label('body','Post Body:')}}
            {{Form::textarea('body',null,array('class' =>'form-control', 'required' => ''))}}

            {{Form::submit('create post',array('class'=>'btn btn-success btn-lg btn-block'))}}

            {!! Form::close() !!}


        </div>
    </div>
@section ('scripts')
    {!! Html::script('js/parsley.min.js')  !!}
    {!! Html::script('js/select2.min.js')  !!}

    <script type="text/javascript">
        $(document).ready(function() {
            $('.js-example-basic-multiple').select2();
        });
    </script>
@endsection
@endsection