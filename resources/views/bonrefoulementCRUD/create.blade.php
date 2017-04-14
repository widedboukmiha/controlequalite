@extends('layouts.default')

@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Create New bonrefoulement</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('bonrefoulementCRUD.index') }}"> Back</a>
            </div>
        </div>
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

    {!! Form::open(array('route' => 'bonrefoulementCRUD.store','method'=>'POST')) !!}
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>date bon refoulement :</strong>
                {!! Form::date('date_refoulement', null, array('placeholder' => 'date_refoulement','class' => 'form-control')) !!}
            </div>
        </div>

          <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>motif bon refoulement:</strong>
                {!! Form::text('motif_refoulement', null, array('placeholder' => 'motif_refoulement','class' => 'form-control')) !!}
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