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
                <h2 class="text-center">liste des chargements</h2>
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
            <th> nom article </th>
        </tr>
    @foreach ($chargement as $key => $ar)
    <tr>       
        <td>{{ ++$i }}</td>     
        <td>{{ $ar->date_exportation }}</td>
        <td>{{ $ar->quantite_exportation }}</td> 
        <td>
           @foreach($ar->articles as $article)
                      {{ $article->nom_article }}
           @endforeach
        
        </td>   
    </tr>
    @endforeach
    </table>

    {!! $chargement->render() !!}

@endsection