<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="/css/app.css" rel="stylesheet" type="text/css" >
  </head>
  <body>

    <div class="content container-fluid">
      <header class="jumbotron">
        <h1>Todo App</h1>
      </header>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="/">Todos App</a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="/todos">List All</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/create-todos">Create Todos</a>
            </li>
          </div>
        </nav>
      @if(session()->has('success'))
        <div class="alert alert-success">
          {{ session()->get('success') }}
        </div>
      @endif

      @yield('content')

    </div>

  </div><!--container-fluid-->

  </body>
</html>
