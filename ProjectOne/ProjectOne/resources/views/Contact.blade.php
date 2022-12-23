@extends('Pages.MainPage')


@section('content')

<div class="contact-container">
<div class="contact-text-container">
<h4>CONTACT</h4>
<h2>Got a problem to solve?</h2>


</div>

<div class="contact-form-container">
<form action="Contact" method="POST">
    @csrf
    <br>

    <p >NAME</p>
    <input type="text" name="name" >
    <br>
    <br>

    <p >EMAIL</p>
    <input type="text" name="email" >
    <br>
    <br>
    <P>MESSAGE</p>
    <textarea name="Description"  cols="30" rows="10"></textarea>
        <br>
        <br>
    <button name="Submit">Submit</button>


</form>

</div>



</div>




@endsection