@extends('Pages.MainPage')

@section('content')

<div class="Login-container" >

<img src="{{asset('MediaResources/LI1.jpg')}}" >

<div class="Login-form-container" >
    <form action="Contact" method="POST">
        @csrf
        <br>
    
        <p >EMAIL</p>
        <input type="text" name="Email" >
        <br>
        <br>
        <p >Password</p>
        <input type="text" name="Password" >
        <br>
        <br>

        <button name="Submit">Submit</button>
    
    
    </form>
</div>




@endsection