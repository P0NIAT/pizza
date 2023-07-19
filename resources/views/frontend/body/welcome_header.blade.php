<nav
class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light"
id="ftco-navbar"
>
<div class="container">
    <a class="navbar-brand" href="{{ route('welcome') }}"
        ><span class="flaticon-pizza-1 mr-1"></span>Pizza<br /><small
            >Italiano</small
        ></a
    >
    <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#ftco-nav"
        aria-controls="ftco-nav"
        aria-expanded="false"
        aria-label="Toggle navigation"
    >
        <span class="oi oi-menu"></span> Menu
    </button>
    <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a href="{{ route('welcome') }}" class="nav-link">Home</a>
            </li>
            <li class="nav-item active">
                <a href="{{ route('pizzas.order') }}" class="nav-link">Order</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('blog.showall') }}" class="nav-link">Blog</a>
            </li>
            {{-- <li class="nav-item">
                <a href="#contact" class="nav-link">Contact</a>
            </li> --}}
            @if (Route::has('login'))
            @auth
            <li class="nav-item">
                <a href="{{ route('admin.dashboard') }}" class="nav-link">Dashboard</a>
            </li>
            @else
            <li class="nav-item">
                <a href="{{ route('admin.login') }}" class="nav-link">Log In</a>
            </li>
                @if (Route::has('register'))
                <li class="nav-item">
                    <a href="{{ route('register') }}" class="nav-link">Sign Up</a>
                </li>
                @endif
            @endauth
            </li>
            @endif
        </ul>
    </div>
</div>
</nav>
