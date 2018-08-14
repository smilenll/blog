@extends('main')
@section('title|Edit Tags')
@section('content')

    {{Form::model($tag , ['route' => ['tags.update',$tag->id],'method' => "PUT"])}}

    {{Form::label('name','Title:')}}
    {{Form::text('name',null,['class' => 'form-control'])}}
    {{Form::submit('save Changes',['class' => 'btn btn-success btn-h1'])}}

    {{Form::close()}}

@endsection