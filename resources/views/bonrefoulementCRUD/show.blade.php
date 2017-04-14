@extends('layouts.default')
 
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show bon refoulement</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('bonrefoulementCRUD.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <div class="row">


        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>date bon refoulement :</strong>
                {{ $bonrefoulement->date_refoulement }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>motif  bonrefoulement:</strong>
                {{ $bonrefoulement->motif_refoulement }}
            </div>
        </div>     

    </div>

@endsection