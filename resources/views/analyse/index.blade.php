@extends('layouts.default')
 
@section('content')


  <div class="row">
        
           <p></p>
    </div>

    <div class="row">
        
           <p></p>
    </div>

    <div class="row">
        
           <p></p>
    </div>

    <div class="row">
        
            <div class ="col-md-6 col-md-offset-3">
                <h2 class="text-center">liste des analyses</h2>
            </div>
    </div>

   <div class="row">

     <p></p>

    </div> 


 <div class="row">
        
           <p></p>
    </div>
  
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

       

    <table class="table table-bordered">
        <tr>
            <th>id</th>
            <th>nature analyse</th>
            <th>nom analyse</th>
            <th>nom laboratoire</th>
        </tr>
    @foreach ($analyse as $key => $ar)
    <tr>       
        <td>{{ ++$i }}</td>     
        <td>{{ $ar->nature_analyse }}</td>
        <td>{{ $ar->nom_analyse }}</td>    
         <td>
           @foreach($ar->laboratoires as $laboratoire)
                      {{ $laboratoire->nom_laboratoire }}
           @endforeach
        
        </td>
    </tr>
    @endforeach
    </table>

    {!! $analyse->render() !!}

@endsection