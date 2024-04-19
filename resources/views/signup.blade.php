@extends('layout')
@section('page_title', 'Sign Up')

@section('page_content')

    <div class="container-md mt-auto">
        <form action="{{route('signup.post')}}" method="POST" class="bg-primary px-4 py-2 rounded-2 ms-auto me-auto mt-auto" style="max-width: 560px">
          @csrf
          <div class="mb-3">
            <label class="form-label text-light fs-6 fw-bold" for="signup_email">Username</label>
            <input type="text" class="form-control" name="signup_username">
          </div>  
          <div class="mb-3">
            <label class="form-label text-light fs-6 fw-bold" for="signup_email">Email address</label>
            <input type="email" class="form-control" name="signup_email">
            <div class="form-text text-light">We'll never share your email with anyone else.</div>
          </div>
          <div class="mb-3">
            <label for="signup_password" class="form-label text-light fs-6 fw-bold">Password</label>
            <input type="password" class="form-control" name="signup_password">
          </div>
          <div class="mb-3">
              <label for="signup_confirm_pasword" class="form-label text-light fs-6 fw-bold">Confirm Password</label>
              <input type="password" class="form-control" name="signup_confirm_pasword">
            </div>
          <button type="submit" class="btn btn-primary bg-light text-primary fw-semibold border rounded-end">Submit</button>
        </form>
    </div>

@endsection