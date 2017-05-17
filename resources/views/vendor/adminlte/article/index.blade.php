@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')
@include('adminlte::layouts.default')     
 
		<div class="row">
			

				<!-- Default box -->
				<div class="box">
					<div class="box-header with-border">
						<h3 class="box-title">gestion des articles</h3>

						<div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
								<i class="fa fa-minus"></i></button>
							<button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
								<i class="fa fa-times"></i></button>
						</div>
					</div>
					<div class="box-body">

    <div class="row">
        
           <p></p>
    </div>



      {!! Form::open(array('route' => 'article.store','method'=>'POST')) !!}
         <fieldset  class="fsStyle">
                    <legend class="legendStyle">ajouter un controlleur :</legend>
         <div class="row">

                        <div class="col-md-3">
                                <div class="form-group">                                
                                    {!! Form::text('type_produit', null, array('placeholder' => 'type produit','class' => 'form-control')) !!}
                                </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">            
                                {!! Form::text('nom_article', null, array('placeholder' => 'nom article','class' => 'form-control')) !!}
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">                
                                {!! Form::text('marque_fabrication', null, array('placeholder' => 'marque fabrication','class' => 'form-control')) !!}
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">              
                                {!! Form::text('format_emballage', null, array('placeholder' => 'format emballage','class' => 'form-control')) !!}
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">             
                                {!! Form::text('date_fabrication', null, array('placeholder' => 'date fabrication','class' => 'form-control')) !!}
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">               
                                {!! Form::text('date_limite_consom', null, array('placeholder' => 'date limite consom','class' => 'form-control')) !!}
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">              
                                {!! Form::text('quantite_globale', null, array('placeholder' => 'quantite globale','class' => 'form-control')) !!}
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">                         
                                {!! Form::text('date_envoi_echantillon', null, array('placeholder' => 'date envo echantillon','class' => 'form-control')) !!}
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">              
                                {!! Form::text('destination', null, array('placeholder' => 'destination','class' => 'form-control')) !!}
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">              
                                {!! Form::text('resultat_analyse', null, array('placeholder' => 'resultat analyse','class' => 'form-control')) !!}
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                {!! Form::text('poids_brut', null, array('placeholder' => 'poids brut','class' => 'form-control')) !!}
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">             
                                {!! Form::text('poids_net', null, array('placeholder' => 'poids net','class' => 'form-control')) !!}
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                        {!! Form::select('certificat_id' ,App\certificat::pluck('date_certificat' , 'id' ) , null , array('class' => 'form-control', 'placeholder' => 'Entrez certificar' , 'multiple' => true )) !!}
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                        {!! Form::select('bonrefoulement_id' ,App\bonrefoulement::pluck('date_refoulement'  , 'id' ) , null , array('class' => 'form-control', 'placeholder' => 'Entrez bon refoulement ' , 'multiple' => true )) !!}
                            </div>
                        </div>

                        <div class="col-md-6 text-center">
                                <button type="submit" class="btn btn-primary">Submit</button>
                        </div>

                </div>
         </fieldset>
    {!! Form::close() !!}


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

 <table class="table table-bordered">
        <tr>
            <th>id</th>
  
            <th>type produit</th>
            <th>nom article</th>
            <th>marque fabrication</th>
            <th>quantite globale</th>
            <th>destination</th>  
       
            <th width="280px">Action</th>
        </tr>
    @foreach ($article as $key => $ar)
    <tr>
        <td>{{ ++$i }}</td>
       
        <td>{{ $ar->type_produit }}</td>
        <td>{{ $ar->nom_article }}</td>
        <td>{{ $ar->marque_fabrication}}</td>
        <td>{{ $ar->quantite_globale }}</td>      
        <td>{{ $ar->destination }}</td>
     
      
   
        <td>
            <a class="btn btn-primary" href="{{ route('article.edit',$ar->id) }}">Edit</a>
            {!! Form::open(['method' => 'DELETE','route' => ['article.destroy', $ar->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
            
            
            {!! Form::close() !!}
        </td>
    </tr>


    @endforeach
    </table>


    

    {!! $article->render() !!}



</div>

	</div>
					<!-- /.box-body -->
				</div>
				<!-- /.box -->

			

@endsection


 