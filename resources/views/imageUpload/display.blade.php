<div>
    <h1>Display upload images</h1>
    @foreach($imgData as $img)
    <img src="{{url('storage/'.$img->path)}}" alt="image">

    @endforeach

<br><br>
<a href="/upload">Upload More</a>
</div>