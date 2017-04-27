 
 @include('home')


<div class="container">
    <div class="row">
        
            <div class ="col-md-6 col-md-offset-3">
                <h2 class="text-center">gestion des prélévements</h2>
            </div>
    </div>

   <div class="row">

<div class="input-group custom-search-form">

         {!! Form::open(['method'=>'GET','url'=>'prelevCRUD','class'=>'navbar-form navbar-left','role'=>'search']) !!}
      <div class="input-group custom-search-form">
       <div class="pull-left">
        <input type="text" name="search" class="form-control" placeholder="Search ....">
        <span class="input-group-btn">
          <button type="submit" class="btn btn-default-sm">
            <i class="fa fa-search"></i>
          </button>
        </span>
      </div>
      </div>
      {!! Form::close() !!}
        </div>
      

         
        <div class="pull-right">

              <button type="button" class="btn btn-info" id="add" > ajouter prelevement</button> 
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

@include('prelevCRUD.create')
    <table class="table table-bordered">

        <tr>
             <th>No</th>
        
            <th>date_prelevement</th>
            <th>nombre_article</th>
             <th>observation</th>
             <th>num_bordereau_d'envoi</th>
             <th>article</th>
             <th>preleve</th>
            <th width="280px">Action</th>
        </tr>
    @foreach ($prelevements as $key => $pre)
    <tr>
        <td>i</td>
       
        <td>{{ $pre->date_pv }}</td>
        <td>{{ $pre->nombre_article }}</td>
        <td>{{ $pre->observation}}</td>
        <td>{{ $pre->num_bordereau_envoi }}</td>
        <td>
           @foreach($pre->articles as $article)
                      {{ $article->nom_article }}
           @endforeach
        
        </td>
       
       <td>  @if ($pre->exportateur)
                             {{ $pre->exportateur->nom_exportateur }}
           
        @endif
        </td>
 
<td>
 
    
       <button class="edit-modal btn btn-primary" 
          >
              <span class="glyphicon glyphicon-edit"></span> Edit
            </button>
            
            
            
            
            <button class="delete-modal btn btn-danger"    >
              <span class="glyphicon glyphicon-trash"></span> Delete
            </button>


</td>


<!--
        <td>
              <button type="button" class="btn btn-info btn-edit" data-id="{{$pre->id}}" > modifier</button> 

            <a class="btn btn-info" href="{{ route('prelevCRUD.show',$pre->id) }}">Show</a>
            {!! Form::open(['method' => 'DELETE','route' => ['prelevCRUD.destroy', $pre->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        </td>-->
    </tr>
    @endforeach
    </table>

    {!! $prelevements->render() !!}

    <script type="text/javascript">

    $('#add').on('click' , function(){
        $('#prelevement').modal('show');
    })



</script>






















