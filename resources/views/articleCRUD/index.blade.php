

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
                <h2 class="text-center">gestion des articles</h2>
            </div>
    </div>

    <div class="pull-left"> 

            <input type="text" name ="search" class="form-control" placeholder="Search">
    </div>

      <button type="submit" name="search" class="btn btn-default">Submit</button>

   <div class="row">
       
        <div class="pull-right"> 

              <a class="btn btn-success" href="{{ route('articleCRUD.create') }}"> ajouter article</a> 
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
  
            <th>type produit</th>
            <th>nom article</th>
            <th>marque fabrication</th>
            <th>quantite globale</th>
            <th>destination</th>  
            <th>prelevement </th>
            <th>chargement </th>
            <th width="280px">Action</th>
        </tr>
    @foreach ($article as $key => $ar)
    <tr>
        <td>{{ ++$i }}</td>
       
        <td>{{ $ar->type_produit }}</td>
        <td>{{ $ar->nom_article }}</td>
        <td>{{ $ar->marque_fabrication}}</td>
        <td>{{ $ar->quantite_globale }}</td>      
        <td>{{ $ar->destination }}</td>
        <td>
        
           @foreach($ar->prelevements as $prelevement)
                      {{ $prelevement->nombre_article }}
                    @endforeach
        
        </td>
           <td>
           @foreach($ar->chargements as $chargement)
                      {{ $chargement->quantite_exportation }}
           @endforeach
        
        </td> 
      
           <td>
           @foreach($ar->analyses as $analyse)
                      {{ $analyse->quantite_exportation }}
           @endforeach
        
        </td> 
      
   
        <td>
            <a class="btn btn-info" href="{{ route('articleCRUD.show',$ar->id) }}">Show</a>
            <a class="btn btn-primary" href="{{ route('articleCRUD.edit',$ar->id) }}">Edit</a>
            {!! Form::open(['method' => 'DELETE','route' => ['articleCRUD.destroy', $ar->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
            
            
            {!! Form::close() !!}
        </td>
    </tr>


    @endforeach
    </table>


    

    {!! $article->render() !!}

