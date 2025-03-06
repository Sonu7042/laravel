<div>
    <h1>Session</h1>
    <form action="user" method="post">
        @csrf
        <input type="text" name="username" placeholder="Enter username">
        <br><br>
        <input type="password" name="password" placeholder="Enter password">
        <br><br>
        <button>Submit</button>

    </form>

</div>