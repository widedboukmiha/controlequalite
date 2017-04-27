
@extends('layouts.app')

@section('content')

<div> 

<nav class="navbar navbar-inverse" style="background-color: #001f4d;">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <!--<div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
 
    </div>-->

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li > <a  class="navbar-brand" href="{{ route('demandeCRUD.index') }}">gestion des demandes</a></li>
      
<!--
        <li {{ (currentA("prelevCRUD/index")) ? 'class=active' : '' }}>
                <a href =  "{{url('/demande')}}"> ges demande
                </a>-->

        <!--<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
 
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>>-->
      </ul>
    </div><!-- /.navbar-collapse -->

    <!--<div class="collapse navbar-collapse">
          <ul class="nav navbar-nav masthead-nav navbar-left">
                <li {{ (current_page("prelevCRUD/index")) ? 'class=active' : '' }}>
                <a href =  "{{url('/demande')}}"> ges demande
                </a>
          
          </ul>
    
    
    </div>-->
     <div class="jumbotron">
                
          
                    </div>
  </div><!-- /.container-fluid -->
  
</nav>
</div>

<div class="container">
    
</div>
@endsection