@extends('layouts.default')
 
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show certificat</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('certificatCRUD.index') }}"> Back</a>
            </div>
        </div>
    </div>
 

    <div class="row">

 
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>nom emballaget:</strong>
                {{ $certificat->nom_emballage }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>nom_transitaire:</strong>
                {{ $certificat->nom_transitaire}}
            </div>
        </div>

    
           
         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>pays_dorigine :</strong>
                {{ $certificat->pays_dorigine }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>destination:</strong>
                {{ $certificat->destination }}
            </div>
        </div>

      
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>moyen transport:</strong>
                {{ $certificat->moyen_transport }}
            </div>
        </div>

         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>lieu:</strong>
                {{ $certificat->lieu }}
            </div>
        </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>date certificat:</strong>
                {{ $certificat->date_certificat }}
            </div>
        </div>
  
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong> bureau_douane:</strong>
                {{ $certificat->bureau_douane}}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>validite:</strong>
                {{ $certificat->validite}}
            </div>
        </div>

    

    </div>

@endsection