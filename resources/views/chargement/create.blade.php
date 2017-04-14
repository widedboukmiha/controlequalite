@extends('layouts.default')

@section('content')

    <div class="row">
     <p> </p>
    </div>

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

    {!! Form::open(array('route' => 'chargement.store','method'=>'POST')) !!}
    <div class="row">
  
         
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>date exportation:</strong>
                {!! Form::date('date_exportation', null, array('placeholder' => 'nom emballage','class' => 'form-control')) !!}
            </div>
        </div>

          <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>quantite a exporter:</strong>
                {!! Form::text('quantite_exportation', null, array('placeholder' => 'nom transitaire','class' => 'form-control')) !!}
            </div>
            </div>

        <div class="col-xs-4">
             <div class="form-group">
                <strong>article :</strong>
                        {!! Form::select('articles[]',App\article::pluck('nom_article' , 'id' ) , null , array('class' => 'form-control', 'placeholder' => 'Entrez les articles ' , 'multiple' => true )) !!}
					
			</div>
        </div>

      

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>

    </div>
    {!! Form::close() !!}

@endsection