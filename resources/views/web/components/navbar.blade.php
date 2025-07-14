<div>
    <nav class="navbar navbar-expand-lg p-3" style="background: linear-gradient(90deg,rgb(0, 1, 10) 0%, #8f94fb 100%);">

        <div class="container-fluid d-flex justify-content-between align-items-center">

            <a href="isi"><img src="{{ asset('img/logo.png') }}" alt="Logo" width="30" height="24" class="d-inline-block align-text-top"> </a>
            <a class="navbar-brand text-white" href="/">E-Commerce</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end p-2" id="navbarSupportedContent">
                <ul class="navbar-nav gap-3">
                    <li class="nav-item">
                        <a class="nav-link active text-white" aria-current="page" href="/">Beranda</a>
                    </li>
                    <!-- kategori -->
                    <li class="nav-item">
                        <a class="nav-link text-white" href="categories">Kategori</a>
                    </li>
                    <!-- produk -->
                    <li class="nav-item">
                        <a class="nav-link text-white" href="/products">Produk</a>
                    </li>
                    <!-- search -->
                    <li class="nav-item">
                        <form class="d-flex" action="{{ url('/search') }}" method="GET">
                            <input class="form-control me-2" type="search" name="query" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-light" type="submit">Search</button>
                        </form>
                    </li>
                    <!-- user authentication -->
                    @if(auth()->guard('web')->check())
                    <div class="dropdown">
                        <a class="btn btn-outline-light dropdown-toggle" href="#" role="button" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                            {{ Auth::guard('web')->user()->name }}
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button class="dropdown-item" type="submit">Logout</button>
                                </form>
                            </li>
                        </ul>
                    </div>
                    @else
                    <!--login  -->
                    <li class="nav-item">
                        <a class="btn btn-outline-light" href="{{ route('login') }}">Login</a>
                    </li>
                    @endif

                    <li class="nav-item">
                        <x-cart-icon></x-cart-icon>
                    </li>
                </ul>
            </div>
        </div>

    </nav>

</div>