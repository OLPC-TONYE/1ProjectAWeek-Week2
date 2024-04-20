<!doctype html>
<html class="h-100" lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('page_title', 'Empty')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
      #toast {
        visibility: hidden;
        max-width: 50px;
        min-height: 50px;
        /*margin-left: -125px;*/
        margin: auto;
        background-color: coral;
        color: #fff;
        text-align: center;
        border-radius: 2px;

        position: fixed;
        z-index: 1;
        left: 0;right:0;
        bottom: 30px;
        font-size: 17px;
        white-space: nowrap;
    }
    #toast #img{
      width: 50px;
      height: 50px;
        
        float: left;
        
        padding-top: 16px;
        padding-bottom: 16px;
        
        box-sizing: border-box;

        
        background-color: #111;
        color: #fff;
    }
    #toast #desc{

        
        color: #fff;
      
        padding: 16px;
        
        overflow: hidden;
        white-space: nowrap;
    }

    #toast.reveal {
        visibility: visible;
        -webkit-animation: fadein 0.5s, expand 0.5s 0.5s,stay 3s 1s, shrink 0.5s 2s, fadeout 0.5s 2.5s;
        animation: fadein 0.5s, expand 0.5s 0.5s,stay 3s 1s, shrink 0.5s 4s, fadeout 0.5s 4.5s;
    }

    @-webkit-keyframes fadein {
        from {bottom: 0; opacity: 0;} 
        to {bottom: 30px; opacity: 1;}
    }

    @keyframes fadein {
        from {bottom: 0; opacity: 0;}
        to {bottom: 30px; opacity: 1;}
    }

    @-webkit-keyframes expand {
        from {min-width: 50px} 
        to {min-width: 450px}
    }

    @keyframes expand {
        from {min-width: 50px}
        to {min-width: 450px}
    }
    @-webkit-keyframes stay {
        from {min-width: 450px} 
        to {min-width: 450px}
    }

    @keyframes stay {
        from {min-width: 450px}
        to {min-width: 450px}
    }
    @-webkit-keyframes shrink {
        from {min-width: 450px;} 
        to {min-width: 50px;}
    }

    @keyframes shrink {
        from {min-width: 450px;} 
        to {min-width: 50px;}
    }

    @-webkit-keyframes fadeout {
        from {bottom: 30px; opacity: 1;} 
        to {bottom: 60px; opacity: 0;}
    }

    @keyframes fadeout {
        from {bottom: 30px; opacity: 1;}
        to {bottom: 60px; opacity: 0;}
    }
    </style>

  </head>
  <body class="d-flex h-100 w-100 bg-black text-white">
    @yield('page_content')

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>