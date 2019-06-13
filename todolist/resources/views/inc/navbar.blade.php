    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Todolist</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav">
      <li class="{{Request::is('/') ?  'active' :''}}">
        <a class="nav-link" href="/">Home <span class="sr-only"></span></a>
      </li>
      <li class="{{Request::is('todo/create') ?  'active' :''}}">
        <a class="nav-link" href="todo/create">Create</a>
      </li>
    </ul>
  </div>
</nav>