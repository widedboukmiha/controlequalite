@extends('layouts.default')
 
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show demande</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('demandeCRUD.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <div class="row">


        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>nature demande:</strong>
                {{ $demande->nature_demande }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>date demande:</strong>
                {{ $demande->date_demande }}
            </div>
        </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>code exporteteur:</strong>
                {{ $exportateur->exportateur_id }}
            </div>
        </div>

    </div>

@endsection