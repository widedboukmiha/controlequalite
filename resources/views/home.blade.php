
<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
       
    </head>
    <body>
        
        <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
          
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        <img src="logooct.jpg" style="width:400px" >
                       
                    </ul>
                    
                        

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())


                        <a class="btn btn-outline-primary"   href="{{ route('login') }}" >Login</a>
                         <a class="btn btn-outline-primary" href="{{ route('register') }}">Regiser</a>

                        
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

<script>
    window.Laravel =  <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
</script>
<script src='/js/app.js' ></script>




<nav class ="navbar navbar-inverse bg-inverse" style="background-color:#002db3;">
  
  
  <div class="navbar-header">
      
        <a href ="{{url('/')}}" class="navbar-brand" href="#" >Accueil</a>
        <a class="navbar-brand"  href="{{url('/prelevCRUD')}}">gestion prelevement </a>
        <a class="navbar-brand"  href="{{url('/demandeCRUD')}}">gestion demande </a>

    

  </div>

  
</nav>






 

    </body>
</html>
