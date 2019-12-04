@extends('layouts.app')
@section('title')
  Todos App | Create Todo
@endsection

@section('content')

      <div class="row justify-content-center">
        <div class="col-md-8">
          <h1 class="text-center my-5">Create Todo</h1>
          <div class="card card-default">
            @if($errors->any())
              <div class="alert alert-danger">
                <ul class="list-group">
                  @foreach($errors->all() as $error)
                  <li class="list-group-item"> {{ $error }} </li>
                  @endforeach
                </ul>
              </div>
            @endif
            <form action="/store-todos" method="POST">
              @csrf
              <div class="card-header"><h4>Create New Todo Item</h4></div>
                <div class="form-group">
                  <input type="text" name="name" placeholder="name" class="form-control" />
                  <textarea placeholder="Description" name="description"
                  class="form-control" rows="5"></textarea>
                  <!--<label for="completed">Completed</label>
                  <input type="checkbox" name="completed" id="completed"
                  class="form-control" />-->
                </div><!-- end of form-group-->
                <div class="form-group text-center">
                  <input type="submit" class="btn btn-large btn-success"
                  id="submit" value="Create" />
                </div>
              </form>
            </div><!-- end of card -->
        </div>
      </div>

@endsection
