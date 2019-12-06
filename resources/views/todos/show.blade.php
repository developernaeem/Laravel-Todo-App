@extends('layout.app')
@section('title')
Single Todo: {{ $todo->name }}
@endsection
@section('content')
    <h1 class="text-center my-5">{{ $todo->name }}</h1>
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <a href="{{ url('todos') }}" class="btn btn-primary mb-4">Back to page</a>
            <div class="card card-default">
                <div class="card-header">
                    Details
                </div>
                <div class="card-body">
                    {{ $todo->description }}
                </div>
            </div>

            <a href="{{ URL::to('edit-todos/'.$todo->id) }}" class="btn btn-info btn-sm my-3">Edit Todo</a>
            <a href="{{ URL::to('detete-todos/'.$todo->id) }}" class="btn btn-danger btn-sm my-3">Delete Todo</a>
        </div>
    </div>

@endsection