@extends('layouts.default')
 
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show article</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('articleCRUD.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>type produit:</strong>
                {{ $article->type_produit }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>nom article:</strong>
                {{ $article->nom_article }}
            </div>
        </div>

    
           
         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>marque fabrication :</strong>
                {{ $article->marque_fabrication }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>format emballage:</strong>
                {{ $article->format_emballage }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>date fabrication:</strong>
                {{ $article->date_fabrication }}
            </div>
        </div>

         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>date limite consom:</strong>
                {{ $article->date_limite_consom }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>quantite globale:</strong>
                {{ $article->quantite_globale }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>date envoi echantillon:</strong>
                {{ $article->date_envoi_echantillon}}
            </div>
        </div>

         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>destination:</strong>
                {{ $article->destination }}
            </div>
        </div>


        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>resultat analyse :</strong>
                {{ $article->resultat_analyse }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>poids brut:</strong>
                {{ $article->poids_brut}}
            </div>
        </div>
       <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>poids net:</strong>
                {{ $article->poids_net }}
            </div>
        </div>


        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>prelevement :</strong>
                    @foreach($article->prelevements as $prelevement)
                      {{ $prelevement->nombre_article }}
                    @endforeach
            </div>
        </div>

 

     

    </div>

@endsection