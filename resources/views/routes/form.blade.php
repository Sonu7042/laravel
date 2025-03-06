<div>
<h1>User Form</h1>

<form action="/user" method="post">
    <input type="hidden" name="_method" value="PUT"> use for put request
    <!-- <input type="hidden" name="_method" value="delete">  use for delete request -->

    @csrf
    <input type="text" name="username" placeholder="enter name">
    <br>
    <br>
    <input type="password" name="password" placeholder="Enter Pasword">
    <br>

</form>
</div>