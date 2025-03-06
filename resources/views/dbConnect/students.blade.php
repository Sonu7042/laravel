<h1>Students Tables</h1>

<table border="1">
    <tr>
        <th>S.no</th>
        <th>Name</th>
        <th>Email</th>
        <th>Password</th>
    </tr>
    @foreach($data as $user)
    <tr>
        <td>{{$user->id}}</td>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->password}}</td>

    </tr>
    @endforeach


</table>