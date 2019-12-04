@extends('layouts.app')

@section('title')
  Todos App | {{ $todo->name }}
@endsection

@section('content')
      <h2 class="text-center my-5"> {{ $todo->name }} </h2>

      <div class="row justify-content-center">
        <div class="col-md-6">
          <p class="todo-descr"> {{ $todo->description }} </p>
          <a href="/todos/{{ $todo->id }}/edit" class="btn btn-info">Edit</a>
          <a href="/todos/{{ $todo->id }}/delete" class="btn btn-danger">Delete</a>
        </div>

      </div>

@endsection
