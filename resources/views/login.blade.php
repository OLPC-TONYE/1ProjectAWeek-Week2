@extends('layout')
@section('page_title', 'Login')

@section('page_content')
  
  <div class="container-md"> 
    
    @if($errors->any())
      <div class="col-12">

        @foreach ($errors->all() as $error)
          <div class="alert alert-danger">
            {{$error}}
          </div>
        @endforeach

        @if (session()->has('login_error'))
          <div class="alert alert-danger">
            {{session('login_error')}}
          </div>
        @endif

        @if (session()->has('continue_login'))
          <div class="alert alert-success">
            {{session('continue_login')}}
          </div>
        @endif
      </div>
    @endif

    <form action="{{route('login.post')}}" method="POST" class="bg-primary px-4 py-2 rounded-2 ms-auto me-auto mt-auto" style="max-width: 560px">
      @csrf  
      <div class="mb-3">
        <label for="login_email" class="form-label text-light fs-6 fw-bold">Email address</label>
        <input type="email" class="form-control" name="login_email" >
      </div>
      <div class="mb-3">
        <label for="login_password" class="form-label text-light fs-6 fw-bold">Password</label>
        <input type="password" class="form-control" name="login_password">
      </div>
      <button type="submit" class="btn btn-primary bg-light text-primary fw-semibold border rounded-end">Submit</button>
    </form>
  </div>

@endsection