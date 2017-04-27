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
                <h2 class="text-center">listes laboratoires</h2>
            </div>
    </div>

   <div class="row">

 

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
            <th>No</th>
      
            <th>nom laboratoire</th>
            <th>adresse </th>
         
        </tr>
    @foreach ($laboratoire as $key => $dem)
    <tr>
        <td>{{ ++$i }}</td>
   
        <td>{{ $dem->nom_laboratoire }}</td>
        <td>{{ $dem->adresse_laboratoire }}</td>
    
    </tr>
    @endforeach
    </table>

    {!! $laboratoire->render() !!}

@endsection