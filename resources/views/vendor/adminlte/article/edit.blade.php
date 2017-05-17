@extends('layouts.default')
 
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit New article</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('articleCRUD.index') }}"> Back</a>
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

    {!! Form::model($article, ['method' => 'PATCH','route' => ['articleCRUD.update', $article->id]]) !!}
 <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>type produit:</strong>
                {!! Form::text('type_produit', null, array('placeholder' => 'type_produit','class' => 'form-control')) !!}
            </div>
        </div>

          <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>nom article:</strong>
                {!! Form::text('nom_article', null, array('placeholder' => 'nom_article','class' => 'form-control')) !!}
            </div>
            </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>marque fabrication:</strong>
                {!! Form::text('marque_fabrication', null, array('placeholder' => 'marque_fabrication','class' => 'form-control')) !!}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>format emballage :</strong>
                {!! Form::text('format_emballage', null, array('placeholder' => 'format_emballage','class' => 'form-control')) !!}
            </div>
        </div>

          <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>date fabrication :</strong>
                {!! Form::text('date_fabrication', null, array('placeholder' => 'date_fabrication','class' => 'form-control')) !!}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>date limite consommation:</strong>
                {!! Form::text('date_limite_consom', null, array('placeholder' => 'date_limite_consom','class' => 'form-control')) !!}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>quantite globale:</strong>
                {!! Form::text('quantite_globale', null, array('placeholder' => 'quantite_globale','class' => 'form-control')) !!}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>date d'envoi d'echantillon:</strong>
                {!! Form::text('date_envoi_echantillon', null, array('placeholder' => 'date_envoi_echantillon','class' => 'form-control')) !!}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>destination:</strong>
                {!! Form::text('destination', null, array('placeholder' => 'destination','class' => 'form-control')) !!}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>resultat d'analyse :</strong>
                {!! Form::text('resultat_analyse', null, array('placeholder' => 'resultat_analyse','class' => 'form-control')) !!}
            </div>
        </div>

          <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>poids brut :</strong>
                {!! Form::text('poids_brut', null, array('placeholder' => 'poids_brut','class' => 'form-control')) !!}
            </div>
        </div>

          <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>poids net :</strong>
                {!! Form::text('poids_net', null, array('placeholder' => 'poids_net','class' => 'form-control')) !!}
            </div>

          <div class="col-xs-4">
            <div class="form-group">
                <strong>prelevement :</strong>
                        {!! Form::select('prelevements[]',App\prelevement::pluck('nombre_article' , 'id' ) , null , array('class' => 'form-control', 'placeholder' => 'Entrez les prelevementss ' , 'multiple' => true )) !!}
					
				    </div>
        </div>

           <div class="col-xs-4">
            <div class="form-group">
                <strong>analyse :</strong>
                        {!! Form::select('analyses[]',App\analyse::pluck('nature_analyse' , 'id' ) , null , array('class' => 'form-control', 'placeholder' => 'Entrez les prelevementss ' , 'multiple' => true )) !!}
					
				    </div>
        </div>
             <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
             </div>
        </div>
    {!! Form::close() !!}

@endsection