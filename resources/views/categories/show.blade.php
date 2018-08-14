@extends('main')
@section('title',"|$category->name Tag")
@section('content')
    <div class="row">
        <div class="col-md-8">

        </div>
        <div class="col-md-2">
            <a href="{{route('categories.edit', $category->id)}}" class="btn btn-primary btn-h1 pull-right">Edit</a>
        </div>
        <div class="col-md-2">
            {!! Form::open(['route' => ['categories.destroy', $category->id],'method' => 'DELETE']) !!}
            {!! Form::submit('Delete',['class' => 'btn btn-danger ']) !!}
            {!! Form::close() !!}
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Tags</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($category->posts as $category)
                    <tr>
                        <th>{{$category->id}}</th>
                        <th>{{$category->title}}</th>

                        <th><a href="{{route('categories.edit', $category->id)}}" class="btn, btn-default btn-xs">View</a> </th>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
