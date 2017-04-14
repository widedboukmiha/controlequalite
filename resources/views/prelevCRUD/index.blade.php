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
                <h2 class="text-center">gestion des prelevements</h2>
            </div>
    </div>

    <div class="pull-left"> 

            <input type="text" name ="search" class="form-control" placeholder="Search">
    </div>

      <button type="submit" name="search" class="btn btn-default">Submit</button>

   <div class="row">
       
        <div class="pull-right"> 

              <a class="btn btn-success" href="{{ route('prelevCRUD.create') }}"> ajouter prelevement</a> 
        </div>

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
        
            <th>date_prelevement</th>
            <th>nombre_article</th>
             <th>observation</th>
             <th>num_bordereau_d'envoi</th>
             <th>article</th>
            <th width="280px">Action</th>
        </tr>
    @foreach ($prelevements as $key => $pre)
    <tr>
        <td>{{ ++$i }}</td>
       
        <td>{{ $pre->date_pv }}</td>
        <td>{{ $pre->nombre_article }}</td>
        <td>{{ $pre->observation}}</td>
        <td>{{ $pre->num_bordereau_envoi }}</td>
   <td>
           @foreach($pre->articles as $article)
                      {{ $article->nom_article }}
           @endforeach
        
        </td>


        <td>
            <a class="btn btn-info" href="{{ route('prelevCRUD.show',$pre->id) }}">Show</a>
            <a class="btn btn-primary" href="{{ route('prelevCRUD.edit',$pre->id) }}">Edit</a>
            {!! Form::open(['method' => 'DELETE','route' => ['prelevCRUD.destroy', $pre->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        </td>
    </tr>
    @endforeach
    </table>

    {!! $prelevements->render() !!}

@endsection


















