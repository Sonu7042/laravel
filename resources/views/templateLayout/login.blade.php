@extends('templateLayout.layout')

@section('title', 'This is login page')

@section('main')
<div>
    <h1>User Login</h1>
    <form action="">
        <input type="text" placeholder="Enter name">
        <br><br>
        <input type="password" placeholder="Enter password">
        <br><br>
        <button>Login</button>
    </form>
</div>

@endsection