@extends('layouts.app')
@section('title')
  Todos App | List All
@endsection

@section('content')

      <div class="row justify-content-center">
        <div class="col-md-8">
          <section class="card card-default">
            <p class="card-header">Things to Remember</p>
            <p class="card-body">
              <ul class="list-group">
                @foreach($todos as $todo)
                <li class="todo list-group-item">
                  {{ $todo->name }}
                  @if(!$todo->completed)
                  <a href="/todos/{{ $todo->id }}/complete"
                    class="btn btn-secondary btn-sm float-right">Complete Todo</a>
                  @endif
                  <a href="/todos/{{ $todo->id }}"
                    class="btn btn-primary btn-sm float-right">View</a>
                </li>
                @endforeach
              </ul>
            </p>
          </section>
        </div>
      </div>

@endsection
