<h2>add New User</h2>

<form action="adduser" method="post">
   @csrf  <!-- This adds the CSRF token -->
    <div class="input-wrapper">
        <input type="text" placeholder="Enter user name" name="email">
    </div>

    <div class="input-wrapper">
        <input type="password" placeholder="Enter user name" name="password">
    </div>

    <div class="input-wrapper">
        <button type="submit">Add New User</button>
    </div>

</form>


<style>
    form {
        width: 200px;
        border-radius: 10px;
        display: flex;
        flex-direction: column;
        gap: 20px;
        border: 1px solid;
        padding: 20px 10px;
    }

    form input, button{
        padding: 10px 5px;
        border-radius: 5px;
        outline: none;
        border: 0.5px solid black;
        width: 100%;
    }

    button:hover{
        background-color: blue;
        color: white;
      
    }
</style>