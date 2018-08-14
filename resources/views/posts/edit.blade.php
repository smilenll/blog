@extends('main')
@section('title | Edit post')

@section ('stylesheets')
    {!! Html::style('css/select2.min.css')  !!}
@endsection

@section('content')
    <div class="row">
        {!! Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'PUT']) !!}
        <div class="col-md-8">
            {{ Form::label('title','Title:') }}
            {{ Form::text('title',null,['class' =>'form-control input-lg']) }}

            {{ Form::label('slug','Slug:',['class' => 'form-label-top']) }}
            {{ Form::text('slug',null,['class' =>'form-control']) }}

            {{Form::label('category_id','Category:',['class'=>'form-label-top'])}}
            {{Form::select('category_id',$categories, null, ['class' => 'form-control'])}}

            {{Form::label('tags','Tags:')}}
            {{Form::select('tags[]',$tags,null,['class' => 'form-control js-example-basic-multiple', 'multiple' => 'multiple'])}}

            {{ Form::label('body','Body:',['class' => 'form-label-top']) }}
            {{ Form::textarea('body',null, ['class' =>'form-control']) }}
        </div>
        <div class="col-md-4">
            <div class="well">
                <dl class="dl-horizontal">
                    <dt>Create At:</dt>
                    <dd>{{date('M j, Y H:i',strtotime($post->created_at)) }}</dd>
                </dl>
                <dl class="dl-horizontal">
                    <dt>Last Updated:</dt>

                    <dd>{{date('M j, Y H:i',strtotime($post->update_at)) }}</dd>
                </dl>
                <hr>
                <div class="col-sm-6">
                    {!! Html::linkRoute('posts.show','Cancel',array($post->id), array('class'=>"btn btn-danger btn-block")) !!}

                </div>
                <div class="col-sm-6">
                    {{Form::submit('Save Changes', ['class'=>"btn btn-success btn-block"])}}
                </div>
            </div>
        </div>
        {!! Form::close() !!}
    </div>


@endsection
@section ('scripts')
    {!! Html::script('js/select2.min.js')  !!}
    <script type="text/javascript">
        $(document).ready(function () {
            $('.js-example-basic-multiple').select2();
        });
    </script>
@endsection