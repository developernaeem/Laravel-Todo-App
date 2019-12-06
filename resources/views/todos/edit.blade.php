@extends('layout.app')
@section('title')
{{ 'Create New Todo' }}
@endsection
@section('content')
    <h1 class="text-center my-5">Update Todos</h1>
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <a href="{{ url('todos') }}" class="btn btn-primary mb-4">Back to page</a>
            <div class="card card-default">
            	<div class="card-header">Update Todo</div>
            	<div class="card-body">
            		@if ($errors->any())
            		<div class="alert alert-danger">
            			<ul class="list-group">
            				@foreach ($errors->all() as $error)
            				<li class="list-group-item">{{ $error }}</li>
            				@endforeach
            			</ul>
            		</div>
            		@endif
            		<form action="{{ url('update-todos/'.$todo->id) }}" method="post">
            			@csrf
            			<div class="form-group">
            				<label for="todoName">Todo Name</label>
            				<input type="text" name="todoName" class="form-control" value="{{ $todo->name }}">
            			</div>
            			<div class="form-group">
            				<label for="todoDesc">Todo Description</label>
            				<textarea name="description" class="form-control">{{ $todo->description }}</textarea>
            			</div>
            			<div class="form-group text-right">
            				<button type="submit" class="btn btn-success">Update Todo</button>
            			</div>
            		</form>
            	</div>
            </div>
        </div>
    </div>
@endsection