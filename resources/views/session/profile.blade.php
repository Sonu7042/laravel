<div>
    <h1>Profile page</h1>

    @if(session('username'))
    <h2>Welcome {{session('username')}}</h2>
    @else
    <h2>No user found in session <a href="session">Login</a></h2>
    @endif

    <a href="logout">Logout</a>
</div>