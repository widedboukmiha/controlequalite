@extends('layouts.default')

@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Create New certificat</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('certificatCRUD.index') }}"> Back</a>
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

    {!! Form::open(array('route' => 'certificatCRUD.store','method'=>'POST')) !!}
    <div class="row">
  
         
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>nom emballage:</strong>
                {!! Form::text('nom_emballage', null, array('placeholder' => 'nom emballage','class' => 'form-control')) !!}
            </div>
        </div>

          <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>nom transitaire:</strong>
                {!! Form::text('nom_transitaire', null, array('placeholder' => 'nom transitaire','class' => 'form-control')) !!}
            </div>
            </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>pays d'origine:</strong>
                {!! Form::text('pays_dorigine', null, array('placeholder' => 'pays dorigine','class' => 'form-control')) !!}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>destination :</strong>
                {!! Form::text('destination', null, array('placeholder' => 'destination','class' => 'form-control')) !!}
            </div>
        </div>

          <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>moyen_transport :</strong>
                {!! Form::text('moyen_transport', null, array('placeholder' => 'moyen transport','class' => 'form-control')) !!}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>lieu:</strong>
                {!! Form::text('lieu', null, array('placeholder' => 'lieu','class' => 'form-control')) !!}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>date_certificat:</strong>
                {!! Form::date('date_certificat', null, array('placeholder' => 'date certificat','class' => 'form-control')) !!}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>date d'envoi d'echantillon:</strong>
                {!! Form::text('validite', null, array('placeholder' => 'validite','class' => 'form-control')) !!}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>

    </div>
    {!! Form::close() !!}

@endsection