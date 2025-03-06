<div>
    <h1>User Login</h1>
    <form action="user" method="post">
        @csrf
        <input type="text" name="name" placeholder="Enter Name">
        <br>
        <br>
        <input type="password" name="password" placeholder="Enter Password">
        <br>
        <br>
        <button>Login</button>
    </form>
</div>