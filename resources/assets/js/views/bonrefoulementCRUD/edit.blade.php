@extends('layouts.default')
 
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit New bonrefoulement</h2>
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

    {!! Form::model($bonrefoulement, ['method' => 'PATCH','route' => ['bonrefoulementCRUD.update', $bonrefoulement->id]]) !!}
 <div class="row">
  

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>date bon refoulement :</strong>
                {!! Form::text('date_refoulement', null, array('placeholder' => 'date_refoulement','class' => 'form-control')) !!}
            </div>
        </div>

          <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>motif bon refoulement:</strong>
                {!! Form::text('motif_refoulement', null, array('placeholder' => 'motif_refoulement','class' => 'form-control')) !!}
            </div>
        </div>

             <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
             </div>
        </div>
    {!! Form::close() !!}

@endsection