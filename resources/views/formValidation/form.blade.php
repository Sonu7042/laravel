<h2>add New User</h2>

<!-- @if($errors->any())

@foreach($errors->all() as $error)
<div style="color: red;">
    {{$error}}
</div>

@endforeach

@endif -->



<form action="addData
" method="post">
    @csrf <!-- This adds the CSRF token -->
    <div class="input-wrapper">
        <input type="text" placeholder="Enter user name" name="email">
        <span style="color: red;">@error('email') {{ $message }} @enderror</span>

    </div>


    <div class="input-wrapper">
        <input type="password" placeholder="Enter user name" name="password">
        <span style="color: red;">@error('password') {{ $message }} @enderror</span>
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

    form input,
    button {
        padding: 10px 5px;
        border-radius: 5px;
        outline: none;
        border: 0.5px solid black;
        width: 100%;
    }

    button:hover {
        background-color: blue;
        color: white;

    }
</style>