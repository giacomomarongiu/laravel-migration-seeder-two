    <header>
        <nav class="navbar navbar-expand-lg  bg-danger">
            <div class="container  bg-success">
                <a class="navbar-brand fw-bold text-light" href="#">BoolItalia</a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item " aria-current="page">
                            <a class="nav-link {{ Route::currentRouteName() === 'welcome' ? 'active' : '' }}"  href="{{ route('index') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Route::currentRouteName() === 'alltrains' ? 'active' : '' }}"  href="{{ route('trains') }}">AllTrains</a>
                        </li>

                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>