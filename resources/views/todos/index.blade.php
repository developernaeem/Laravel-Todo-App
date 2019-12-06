@extends('layout.app')
@section('title')
{{ 'Todos List' }}
@endsection
@section('content')

<h1 class="text-center my-5">Todos App</h1>
<div class="row">
    <div class="col-md-8 offset-md-2">
        <a href="{{ url('/') }}" class="btn btn-primary mb-4">Back to page</a>
        <div class="card card-default">
            <div class="card-header">
                Todos
            </div>
            <div class="card-body">
                <ul class="list-group">
                    @foreach ($todos as $todo)
                    <li class="list-group-item">{{ $todo->name }}
                        @if(!$todo->completed)
                            <a href="{{ URL::to('complate-todos/'.$todo->id) }}" class="btn btn-warning btn-sm float-right text-white">Complete</a>
                        @endif
                        <a href="{{ URL::to('show-todos/'.$todo->id) }}" class="btn btn-primary btn-sm float-right mr-2">View</a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>

@endsection