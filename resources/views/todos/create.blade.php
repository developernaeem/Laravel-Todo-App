@extends('layout.app')
@section('title')
{{ 'Create New Todo' }}
@endsection
@section('content')
    <h1 class="text-center my-5">Create Todos</h1>
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <a href="{{ url('todos') }}" class="btn btn-primary mb-4">Back to page</a>
            <div class="card card-default">
            	<div class="card-header">Create New Todo</div>
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
            		<form action="{{ url('store-todo') }}" method="post">
            			@csrf
            			<div class="form-group">
            				<label for="todoName">Todo Name</label>
            				<input type="text" name="todoName" class="form-control" placeholder="Todo Name Here...">
            			</div>
            			<div class="form-group">
            				<label for="todoDesc">Todo Description</label>
            				<textarea name="description" class="form-control" placeholder="Description Here..."></textarea>
            			</div>
            			<div class="form-group text-right">
            				<button type="submit" class="btn btn-success">Create Todo</button>
            			</div>
            		</form>
            	</div>
            </div>
        </div>
    </div>
@endsection