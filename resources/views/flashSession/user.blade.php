<div>
    <h1>Flash Session</h1>

    @if(session('message'))
    <span style="color: green;"> {{session('message')}}</span>
     @endif
      
    @if(session('name'))
    <span > {{session('name')}}</span>
     @endif


     <!-- keep session particular -->
      {{session()->keep('name') }}


    
   <!-- to stop the message -->
   <!-- {{session()->reflash()}} -->

    <form action="add" method="post">
        @csrf
        <input type="text" name="username" placeholder="Enter username">
        <br><br>
        <input type="password" name="password" placeholder="Enter password">
        <br><br>
        <button>Submit</button>
    </form>
</div>