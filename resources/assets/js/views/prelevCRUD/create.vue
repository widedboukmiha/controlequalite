@extends('layouts.default')

@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Create New Item</h2>
            </div>
            <div class="pull-right">
            </div>
        </div>
    </div>

  

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

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>

    </div>
    {!! Form::close() !!}

@endsection