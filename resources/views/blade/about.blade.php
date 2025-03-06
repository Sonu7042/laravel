<!-- templete blade use -->

<h1>about blade templete</h1>
<h2>My name is {{$name}}</h2>

<!-- <p>{{rand()}}</p> -->

<!-- <p>{{$users[1]}}</p> -->

<!-- @if($name=="sonu")
<h2>this is Sonu</h2>

@elseif($name=="sam")
<h2>This is Sam</h2>

@else
<h2>other user</h2>

@endif -->


<!-- <div>
    @for($i=0; $i<10; $i++)
    <h3>{{$i}}</h3>
    @endfor
</div> -->



<div>
    @foreach($users as $user)
    <p>{{$user}}</p>
    @endforeach
</div>