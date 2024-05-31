<header>
    <div class="collapse bg-dark" id="navbarHeader">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-md-7 py-4">
                    <h4 class="text-white">RizkyMr&reg;</h4>
                    <p class="text-muted">
                    <ul class="list-unstyled">
                        <li><a href="{{url('penulis')}}" class="text-warning">Penulis</a></li>
                        <li><a href="{{url('artikel')}}" class="text-warning">Artikel</a></li>
                        <li><a href="{{url('kategori')}}" class="text-warning">Kategori</a></li>
                    </ul>
                    </p>
                </div>
                <div class="col-sm-4 offset-md-1 py-4">
                    @guest
                    <h4 class="text-white">Login/Register</h4>
                    <ul class="list-unstyled">
                        <li><a href="{{url('login')}}" class="text-white">Login</a></li>
                        <li><a href="{{url('register')}}" class="text-white">Register</a></li>
                    </ul>
                    @else
                    <h4 class="text-white">{{Auth::user()->name}}</h4>
                    <ul class="list-unstyled">
                        <li>
                            <a href="{{url('logout')}}" class="text-white"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                Logout
                            </a>
                        </li>
                        {{-- form untuk logout --}}
                        <form action="{{route('logout')}}" method="POST" id="logout-form">
                            @csrf
                        </form>
                    </ul>
                    @endguest
                </div>
            </div>
        </div>
    </div>
    <div class="navbar navbar-dark bg-dark shadow-sm">
        <div class="container">
            <a href="#" class="navbar-brand d-flex align-items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-buildings-fill" viewBox="0 0 16 16">
                    <path
                        d="M15 .5a.5.5 0 0 0-.724-.447l-8 4A.5.5 0 0 0 6 4.5v3.14L.342 9.526A.5.5 0 0 0 0 10v5.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V14h1v1.5a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5zM2 11h1v1H2zm2 0h1v1H4zm-1 2v1H2v-1zm1 0h1v1H4zm9-10v1h-1V3zM8 5h1v1H8zm1 2v1H8V7zM8 9h1v1H8zm2 0h1v1h-1zm-1 2v1H8v-1zm1 0h1v1h-1zm3-2v1h-1V9zm-1 2h1v1h-1zm-2-4h1v1h-1zm3 0v1h-1V7zm-2-2v1h-1V5zm1 0h1v1h-1z" />
                </svg>
                <hr>
                <strong>RizkyMr&reg;</strong>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader"
                aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </div>
</header>
