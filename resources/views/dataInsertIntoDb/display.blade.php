<div>
    <h1>Diplay data</h1>
    <!-- {{print_r($student)}} -->

     <!-- Search functionaliy -->
     <form action="search" method="get">
        <input type="text" name="search"  value="{{ request('searchData') }}" placeholder="Search with Name">
        <button>Search</button>
     </form>



    <form action="deleteMulti" method="post">
        @csrf
        <button>Delete</button>
     <!-- display data from database -->
    <table border="1">
        <tr>
            <td>Section</td>
            <td>Name</td>
            <td>Email</td>
            <td>Password</td>
            <td>Created</td>
            <td>Operation</td>
        </tr>
        @foreach($student as $list)
        <tr>
            <td><input type="checkbox" name="ids[]" value="{{$list->id}}"></td>
            <td>{{$list->name}}</td>
            <td>{{$list->email}}</td>
            <td>{{$list->password}}</td>
            <td>{{$list->created_at}}</td>
            <td>
                <a style="color: red;" href="{{'delete/'.$list->id}}">Delete</a>
                <a href="{{'edit/'.$list->id}}">Edit</a>
             </td>
        </tr>

        @endforeach

    </table>
    </form>
    <br>
    <br>



    <!-- pagination -->
    {{$student->links()}}
</div>





<style>
    .w-5.h-5{
        width: 20px;
    }
</style>