<nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="/">Le-Klase</a>
            <div class="navbar-nav ms-auto">
                @auth
                    <a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a>
                    <form action="{{ route('logout') }}" method="POST" class="d-inline">
                        @csrf
                        <button class="nav-link" type="submit">Logout</button>
                    </form>
                @else
                    <a class="nav-link" href="{{ route('login') }}">Login</a>
                    <a class="nav-link" href="{{ route('register') }}">Register</a>
                @endauth
                <a class="nav-link" href="{{ route('grades.my') }}">My Grades</a>
            </div>
        </div>
    </nav>