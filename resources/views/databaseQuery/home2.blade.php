<h1>home 2</h1>

<!-- <h2>{{$data}}</h2> -->


<table border="1">
    <tr>
        <th>S.No</th>
        <th>Email</th>
        <th>Password</th>
        <th>Create_At</th>
    </tr>

    <tr>
        @foreach($data as $user)
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->password}}</td>
            <td>{{$user->create_at}}</td>
        </tr>
        @endforeach
    </tr>

</table>