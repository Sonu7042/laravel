<h1>connect db</h1>

<table border="1">
    <tr>
        <th>S.no</th>
        <th>Email</th>
        <th>Password</th>
        <th>Created_At</th>
    </tr>
    @foreach($users as $user)
    <tr>
        <th>{{$user->id}}</th>
        <th>{{$user->email}}</th>
        <th>{{$user->password}}</th>
        <th>{{$user->create_at}}</th>
    </tr>
    @endforeach
</table>