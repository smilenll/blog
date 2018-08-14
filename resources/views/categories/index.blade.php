@extends('main')
@section('title | Categories')
@section('content')
    <div class="row">
        <div class="col-md-8">
            <h1>Categories</h1>
            <table class="table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                </tr>
                </thead>
                <tbody>
                @foreach($categories as $category)
                    <tr>
                        <th>{{$category->id}}</th>
                        <td><a href="{{route('categories.show', $category->id )}}">{{$category->name}}</a></td>

                    </tr>
                </tbody>
                @endforeach
            </table>
        </div>
        <div class="col-md-3">
            {!! Form::open(['route' =>'categories.store']) !!}
                <h2>New Category</h2>
            {{Form::label('name', 'Name:')}}
            {{Form::text('name', null, ['class' => 'form-control'])}}
            <br>
            {{Form::submit('create new category', ['class' => 'btn btn-primary brn-blog'])}}
            {!! Form::close() !!}
        </div>
    </div>
@endsection