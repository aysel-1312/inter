<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('dashboard')}}">Dashboard</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('posts')}}">Post</a>
            </li>
        </ul>

        <ul class="navbar-nav">
            @auth
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">{{auth()->user()->name}}</a>
            </li>
                <form action="{{route('logout')}}" method="post">
                    @csrf
                    <li class="nav-item">
                        <button type="submit">Logout</button>
                    </li>
                </form>
            @endauth
            @guest()

            <li class="nav-item">
                <a class="nav-link" href="{{route('login')}}">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('register')}}">Register</a>
            </li>
                @endguest
        </ul>
    </div>
</nav>


{{--<nav class="navbar navbar-expand-lg navbar-light bg-light">

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{route('home')}}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Dashboard</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('posts')}}">Posts</a>
            </li>
        </ul>

            <ul class="navbar-nav" >


                @auth
                <li class="nav-item">
                    <a class="nav-link" href="#">{{auth()->user()->name}}</a>
                </li>
                    <form action="{{route('logout')}}" method="POST">
                        @csrf
                        <li class="nav-item">
                            <button type="submit" class="nav-link">Logout</button>
                        </li>

                    </form>

                @endauth
         @guest

                    <li class="nav-item " >
                <a class="nav-link" href="{{route('login')}}">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('register')}}">Register</a>
            </li>
                    @endguest
            </ul>     </div>



</nav>--}}
