<h1>Home</h1>

<!-- get url -->
<h2>
    <!-- {{URL::current()}}   -->
    {{url()->current()}}
</h2>


<!-- get full url -->
<h2>
    <!-- {{URL::full()}} -->
    {{url()-> full()}}

</h2>


<!-- first way -->
<a href="/about">About</a> 
<br>

<!-- second way -->
 <a href="{{URL::to('about')}}">about page</a>

 <br>
 <a href="{{URL::to('about', ['sonu'])}}">{{URL::to('about', ['sonu'])}}</a>