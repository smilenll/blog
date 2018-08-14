@extends('main')
@section('title'|"$category->name")
@section('content')

    {{Form::model($category , ['route' => ['categories.update',$category->id],'method' => "PUT"])}}

    {{Form::label('name','Title:')}}
    {{Form::text('name',null,['class' => 'form-control'])}}
    {{Form::submit('save Changes',['class' => 'btn btn-success btn-h1'])}}

    {{Form::close()}}

@endsection