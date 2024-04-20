@extends('layout')
@section('page_title', 'Home Page')

@section('page_content')
    @include('include.header')
    
    <div class="my-auto d-flex w-100 p-3 mx-auto flex-column">

        <main class="px-3">
            <h1 class="mb-5"> <span  style="color: coral">Laravel</span> is a nice framework </h1>
            @auth
                <h3 class="mb-3">Welcome, {{auth()->user()->name}}</h3>
                
            @elseguest
                <h3>Who Are You?</h3>
                <p class="lead">Please create an account so I can get to know you better</p>
                <p class="lead">
                    <a href="{{route('signup')}}" class="btn btn-lg fw-bold " style="background-color:coral; color: white">Get Started</a>
                </p>
            @endauth
          
            <p class="lead"></p>
            
        </main>
      
    </div>
@endsection