

<div class="modal fade" id="prelevement"  role="dialog">
  <div class="modal-dialog" >
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ajouter prelevement</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {!! Form::open(array('route' => 'prelevCRUD.store','method'=>'POST')) !!}
    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>date_prelevement:</strong>
                {!! Form::date('date pv', null, array('placeholder' => 'date pv','class' => 'form-control')) !!}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>nombre_article:</strong>
                {!! Form::text('nombre article', null, array('placeholder' => 'nombre article','class' => 'form-control')) !!}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>observation:</strong>
                {!! Form::text('observation', null, array('placeholder' => 'observation','class' => 'form-control')) !!}
            </div>
        </div>

          <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>num_bordereau_envoi:</strong>
                {!! Form::text('num_bordereau_envoi', null, array('placeholder' => 'num_bordereau_envoi','class' => 'form-control')) !!}
            </div>
        </div>


                 
        <div class="col-xs-4">
            <div class="form-group">
                <strong>nom article :</strong>
                        {!! Form::select('articles[]',App\article::pluck('nom_article' , 'id' ) , null , array('class' => 'form-control', 'placeholder' => 'Entrez les articles ' , 'multiple' => true )) !!}
					
				    </div>
          </div>


            <div class="col-xs-4">
            <div class="form-group">
                <strong> exportateur :</strong>
                        {!! Form::select('exportateur_id' ,App\exportateur::pluck('nom_exportateur' , 'id' ) , null , array('class' => 'form-control', 'placeholder' => 'Entrez exportateur ' , 'multiple' => true )) !!}
					
				    </div>
          </div>

           </div>
 


      
      </div>
      <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>

      </div>
         {!! Form::close() !!}
    </div>
  </div>


</div>



