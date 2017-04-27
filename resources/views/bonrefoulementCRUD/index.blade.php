
  @include('homestat')
      <div class="container"> 

<div class="row">
        
            <div class ="col-md-6 col-md-offset-3">
                <h2 class="text-center">gestion des bon refoulements</h2>
            </div>
    </div>

   <div class="row">

        <div class="pull-left">          
            <input type="text" class="form-control" placeholder="Search">
        </div>
      
             <button type="submit" class="btn btn-default">Submit</button>

        <div class="pull-right">

              <a class="btn btn-success" href="{{ route('bonrefoulementCRUD.create') }}"> ajouter bon refoulement</a> 
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
            <th>id</th>
       
            <th>tdate refoulement</th>
            <th>motif bonrefoulement</th>
            <th> nom article </th>
            <th width="280px">Action</th>
        </tr>
    @foreach ($bonrefoulement as $key => $ar)
    <tr>
        <td>{{ ++$i }}</td>  
        <td>{{ $ar->date_refoulement }}</td>
        <td>{{ $ar->motif_refoulement }}</td>
        <td>
           @foreach($ar->articles as $article)
                      {{ $article->nom_article }}
           @endforeach
        
        </td> 
   
        <td>
            <a class="btn btn-info" href="{{ route('bonrefoulementCRUD.show',$ar->id) }}">Show</a>
            <a class="btn btn-primary" href="{{ route('bonrefoulementCRUD.edit',$ar->id) }}">Edit</a>
            {!! Form::open(['method' => 'DELETE','route' => ['bonrefoulementCRUD.destroy', $ar->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        </td>
    </tr>
    @endforeach
    </table>

    {!! $bonrefoulement->render() !!}

</div>