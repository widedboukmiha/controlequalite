

<div class="modal fade" id="prelevementedit"  role="dialog">
  <div class="modal-dialog" >
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">modifier prelevement</h5>
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

    {!! Form::model($prelevement, ['method' => 'PATCH','route' => ['prelevCRUD.update', $prelevement->id]]) !!}
   <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>date prelevement:</strong>
                {!! Form::text('date_pv', null, array('placeholder' => 'date_pv','class' => 'form-control')) !!}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>nombre_article:</strong>
                {!! Form::text('nombre_article', null, array('placeholder' => 'nombre_article','class' => 'form-control')) !!}
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

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>

    </div>
    {!! Form::close() !!}

   </div>
  </div>
</div>