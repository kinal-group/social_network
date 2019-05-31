<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- <title>{{ config('app.name', 'Kinal Group App') }}</title> -->
    <title>Kinal Group App</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>



    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-primary navbar-expand-md navbar-light navbar-laravel  ">
            <div class="container">
                
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href="{{ url('/') }}"> <i class="fa fa-home"></i>&nbsp;
                    {{ config('app.name', 'Laravel') }}
                </a>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}"><i class="fa fa-lock"></i> &nbsp;{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}"><i class="fa fa-user-plus"></i> &nbsp;{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                             <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}"><i class="fa fa-bell"></i>&nbsp;<sup><span style="color:red;font-weight:bold;font-size:14px">12</span></sup></a>
                            </li>
                            <li class="nav-item">
                                    <a class="nav-link" data-toggle="modal" data-target="#myModal">Setting &nbsp;<i class="fa fa-caret-down"></i></i>&nbsp;</a>
                            </li>
                        
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>

        <div class="footer">
            <div>@Developed by Kinal Group | Email: info@kinalgroup.com | Website: 
                <a href="http://bongnoch.com" target="_blank">
                    www.kinalgroup.com
                </a>
                <span class="pull-right">
                    <a href="http://bongnoch.com" target="_blank">
                        &copy;All Right Reserved by Kinal 2019
                    </a>
                    <img src="https://www.hammondlumber.com/wp-content/uploads/2018/09/HLC_redonwhite.png"/>
                </span>
            </div>
        </div>
    </div>
</body>
<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
        <h4 class="modal-title modal_link bg bg-success">​ <i class="fa fa-question"></i> &nbsp; Guideline...</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
         
        </div>
        <div class="modal-body">
            <a href="" class="btn btn-primary modal_link"​ >Documents & Help</a>
            <a href="" class="btn btn-primary modal_link"><i class="fa fa-file-pdf"></i> &nbsp;Attachments File</a>
            <a href="" class="btn btn-primary modal_link">About US</a>
            <a href="" class="btn btn-primary modal_link">Contact US</a>
        </div>
       
      </div>
      
    </div>
  </div>
  
</html>
