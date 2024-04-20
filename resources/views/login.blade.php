@extends('layout')
@section('page_title', 'Login')

@section('page_content')

  <div class="h-100 container-fluid">
    <div class="h-100 row d-flex align-items-stretch">
      <div class="col-12 col-md-7 col-lg-6 col-xl-5 d-flex align-items-center flex-column px-vw-5">
        <div class="px-5 mt-auto mb-auto col-12">
          <h2>Login</h3>
            <form action="{{route('login.post')}}" method="POST" class="row">
              @csrf 
              <div class="col-12">
                <div class="mb-3">
                  <label for="login_email" class="form-label text-light fs-6 fw-bold">Email address</label>
                  <input type="email" class="form-control form-control-lg bg-gray-800 border-dark" name="login_email" >
                </div>
                <div class="mb-3">
                  <label for="login_password" class="form-label text-light fs-6 fw-bold">Password</label>
                  <input type="password" class="form-control form-control-lg bg-gray-800 border-dark" name="login_password">
                </div>
                <button type="submit" class="btn bg-white rounded-end btn-md mb-4">Submit</button>
                <div class="form-text text-light">
                  <a class="form-text text-light" href="{{route('signup')}}">Don't Have An Account?</a>
                </div>
              </div> 
            </form>
        </div>
      </div>
      <div class="col-12 col-md-5 col-lg-6 col-xl-7 bg-warning bg-gradient">
        {{-- <img class="img-fluid" src="{{ asset('images/abstract18.jpg') }}" alt="" srcset=""> --}}
      </div>
    </div>
  </div>

  @if($errors->any() or session()->has('login_error') or session()->has('continue_login'))
      <div id="toast">
        <div id="desc">
          @foreach ($errors->all() as $error)
            {{$error}} <br>
          @endforeach
          @if (session()->has('login_error'))
            {{session('login_error')}} <br>
          @endif
          @if (session()->has('continue_login'))
            {{session('continue_login')}}
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