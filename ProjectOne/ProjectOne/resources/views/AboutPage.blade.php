@extends('Pages.MainPage')

@section('content')
<hr>
<div class="about-Container">

<div class="text-conatiner">
    <h2>ABOUT</h2>

    <p>I'm Levan, a passionate freelancer bringing you programming and design from the future. I am experienced in developing web and desktop applications including full front end design. This includes brand identity, graphics and illustrations.</p>

    

</div>
<div class="Image-Container">
    <img src="{{asset('MediaResources/I1.jpg')}}">
    <img src="{{asset('MediaResources/i2.jpg')}}">
    <img src="{{asset('MediaResources/I3.jpg')}}">
    <img src="{{asset('MediaResources/I5.jpg')}}">

</div>


<br>
<br>
<hr>
<br>


    <div class="Tech-container">
        <h2>Technologies</h2>


        <div class="Tech-img">
            <div>
            <img src="{{asset('MediaResources/javascript.jpg')}}" alt="">
            <p>JS</p>
        </div>
        <div>
            <img src="{{asset('MediaResources/sass.jpg')}}" alt="">
            <p>SASS</p>
        </div>
        <div>
            <img src="{{asset('MediaResources/bootstrap.jpg')}}" alt="">
            <p>BOOTSTRAP</p>
        </div>
        <div>
            <img src="{{asset('MediaResources/git.jpg')}}" alt="">
            <p>GIT</p>
        </div>
        <div>
            <img src="{{asset('MediaResources/typescript.jpg')}}" alt="">
            <p>typescript</p>
        </div>
        <div>
            <img src="{{asset('MediaResources/react.jpg')}}" alt="">
            <p>REACT</p>
        </div>
        <div>
            <img src="{{asset('MediaResources/php.jpg')}}" alt="">
            <p>PHP</p>
        </div>
        <div>
            <img src="{{asset('MediaResources/sql.jpg')}}" alt="">
            <p>SQL</p>
        </div>
        <div>
             <img src="{{asset('MediaResources/C.jpg')}}" alt="">
            <p>C#</p>
        </div>
        <div>
            <img src="{{asset('MediaResources/Python.png')}}" alt="">
            <p>PYTHON</p>
        </div>
        <div>
            <img src="{{asset('MediaResources/unity.jpg')}}" alt="">
            <p>UNITY</p>
        </div>

        </div>


    </div>
</div>







@endsection

