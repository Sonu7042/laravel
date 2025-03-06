<div>
    <h1>Add New Student</h1>
    <form action="addStudent" method="post">
        @csrf
        <input type="text" name="name" placeholder="Enter Name">
        <br><br>

        <input type="ema" name="email" placeholder="Enter email">
        <br><br>

        <input type="text" name="password" placeholder="Enter password">
        <br><br>
        <button>Add Student</button>

    </form>
</div>