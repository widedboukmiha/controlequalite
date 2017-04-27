 
       <div class="container"  id="manage-template"> 
            <div class ="col-md-6 col-md-offset-3">
                <h2 class="text-center">gestion des controlleur</h2>
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
           
            <th width="280px">Action</th>
        </tr>
    @foreach ($controlleur as $key => $ar)
    <tr>

       
        <td>{{ ++$i }}</td>
      
        <td>{{ $ar->nom}}</td>
        <td>{{ $ar->prenom }}</td>
 
      
      
   
        
    </tr>
    @endforeach
    </table>

    {!! $controlleur->render() !!}

</div>