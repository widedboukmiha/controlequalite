  @include('homestat')
       <div class="container"> 
            <div class ="col-md-6 col-md-offset-3">
                <h2 class="text-center">gestion des certificats</h2>
            </div>
   

   <div class="row">

        <div class="pull-left">          
            <input type="text" class="form-control" placeholder="Search">
        </div>
      
             <button type="submit" class="btn btn-default">Submit</button>

        <div class="pull-right"> 
              <a class="btn btn-success" href="{{ route('certificatCRUD.create') }}"> ajouter certificat</a> 
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
            <th>nom_emballage</th>
            <th>nom_transitairet</th>
            <th>pays_dorigine</th>
            <th>destination</th>
            <th>moyen_transport</th>  
            <th>lieu</th>
            <th>date_certificat</th>
            <th>bureau_douane</th>
            <th>validité</th>  
            <th width="280px">Action</th>
        </tr>
    @foreach ($certificat as $key => $ar)
    <tr>

       
        <td>{{ ++$i }}</td>
      
        <td>{{ $ar->nom_emballage}}</td>
        <td>{{ $ar->nom_transitair }}</td>
        <td>{{ $ar->pays_doriginen}}</td>
        <td>{{ $ar->destination }}</td>      
        <td>{{ $ar->moyen_transport}}</td>
         <td>{{ $ar->lieu }}</td>
        <td>{{ $ar->date_certificat}}</td>
        <td>{{ $ar->bureau_douane}}</td>      
        <td>{{ $ar->validite}}</td>
      
      
   
        <td>
            <a class="btn btn-info" href="{{ route('certificatCRUD.show',$ar->id) }}">Show</a>
            <a class="btn btn-primary" href="{{ route('certificatCRUD.edit',$ar->id) }}">Edit</a>
            {!! Form::open(['method' => 'DELETE','route' => ['certificatCRUD.destroy', $ar->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        </td>
    </tr>
    @endforeach
    </table>

    {!! $certificat->render() !!}

</div>