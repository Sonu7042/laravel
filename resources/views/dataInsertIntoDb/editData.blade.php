<div>
    <h1>Update Student</h1>
    <form action="/editStudent/{{$data->id}}" method="post">
        @csrf
        <input type="hidden" name="_method" value="put">
        <input type="text" name="name" value="{{$data->name}}" placeholder='Enter name'>
        <br><br>
        <input type="text" name="email" value="{{$data->email}}" placeholder='Enter email'>
        <br><br>
        <input type="text" name="password" value="{{$data->password}}" placeholder='Enter password'>
        <br><br>
        <button>Update</button>
        <a href="diplayData">Cancel</a>
    </form>
</div>