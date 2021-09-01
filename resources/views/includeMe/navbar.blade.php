<nav class="navbar navbar-expand-lg navbar-light bg-secondary">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link h5 {{Request::is('/') ? 'active' : ''}}" href="/">All Todo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link h5 {{Request::is('Todo/create') ? 'active' : ''}}" href="Todo/create">Create</a>
                </li>
            </ul>
        </div>
    </div>
</nav>