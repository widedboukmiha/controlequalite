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
                <h2 class="text-center">gestion des demandes</h2>
            </div>
    </div>

   <div class="row">

        <div class="pull-left">          
            <input type="text" class="form-control" placeholder="Search">
        </div>
      
             <button type="submit" class="btn btn-default">Submit</button>

        <div class="pull-right"> 
              <a class="btn btn-success" href="{{ route('demandeCRUD.create') }}"> ajouter demande</a> 
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
      
            <th>nature demande</th>
            <th>date demande</th>
            <th width="280px">Action</th>
        </tr>
    @foreach ($demande as $key => $dem)
    <tr>
        <td>{{ ++$i }}</td>
   
        <td>{{ $dem->nature_demande }}</td>
        <td>{{ $dem->date_demande }}</td>
        <td>
            <a class="btn btn-info" href="{{ route('demandeCRUD.show',$dem->id) }}">Show</a>
            <a class="btn btn-primary" href="{{ route('demandeCRUD.edit',$dem->id) }}">Edit</a>
            {!! Form::open(['method' => 'DELETE','route' => ['demandeCRUD.destroy', $dem->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        </td>
    </tr>
    @endforeach
    </table>

    {!! $demande->render() !!}

@endsection