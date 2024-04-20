@extends('layout')
@section('page_title', 'Sign Up')

@section('page_content')

  <div class="h-100 container-fluid">
    <div class="h-100 row d-flex align-items-stretch">
      <div class="col-12 col-md-7 col-lg-6 col-xl-5 d-flex align-items-center flex-column px-vw-5">
        <div class="px-5 mt-auto mb-auto col-12">
          
          <h2>Register Your Account</h3>
            <form action="{{route('signup.post')}}" method="POST" class="row">
              @csrf
              <div class="col-12">
                <div class="mb-3">
                  <label class="form-label text-light fs-6 fw-bold" for="signup_email">Username</label>
                  <input type="text" class="form-control form-control-lg bg-gray-800 border-dark" name="signup_username">
                </div>  
                <div class="mb-3">
                  <label class="form-label text-light fs-6 fw-bold" for="signup_email">Email address</label>
                  <input type="email" class="form-control form-control-lg bg-gray-800 border-dark" name="signup_email">
                  <div class="form-text text-light">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                  <label for="signup_password" class="form-label text-light fs-6 fw-bold">Password</label>
                  <input type="password" class="form-control form-control-lg bg-gray-800 border-dark" name="signup_password">
                </div>
                <div class="mb-3">
                    <label for="signup_password_confirmation" class="form-label text-light fs-6 fw-bold">Confirm Password</label>
                    <input type="password" class="form-control form-control-lg bg-gray-800 border-dark" name="signup_password_confirmation">
                  </div>
                <button type="submit" class="btn bg-white rounded-end btn-md mb-4">Submit</button>
                <div class="form-text text-light">
                  <a class="form-text text-light" href="{{route('login')}}">Already Have An Account?</a>
                </div>
              </div>
            </form>
        </div>
        
      </div>
      <div class="col-12 col-md-5 col-lg-6 col-xl-7 bg-success bg-gradient">
        
      </div>
    </div>
    
  </div>

  @if($errors->any() or session()->has('sign_error'))
      <div id="toast">
        <div id="desc">
          @foreach ($errors->all() as $error)
            {{$error}} <br>
          @endforeach
          @if (session()->has('sign_error'))
            {{session('sign_error')}} <br>
          @endif
          
        </div>
      </div>
      <script>

        function launch_toast() {
            var x = document.getElementById("toast")
            x.className = "reveal";
            setTimeout(function(){ x.className = x.className.replace("reveal", ""); }, 5000);
        }
  
        document.onload(launch_toast());
      </script>
      
  @endif
  

@endsection