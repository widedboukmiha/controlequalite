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
						<h3 class="box-title">gestion certificats</h3>

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



     {!! Form::open(array('route' => 'certificat.store','method'=>'POST')) !!}
    <div class="row">
  
          <fieldset  class="fsStyle">
    <legend class="legendStyle">ajouter un certificat :</legend>
        <div class="col-md-3">
            <div class="form-group">             
                {!! Form::text('nom_emballage', null, array('placeholder' => 'nom emballage','class' => 'form-control')) !!}
            </div>
        </div>

          <div class="col-md-3">
            <div class="form-group">                
                {!! Form::text('nom_transitaire', null, array('placeholder' => 'nom transitaire','class' => 'form-control')) !!}
            </div>
            </div>

        <div class="col-md-3">
            <div class="form-group">           
                {!! Form::text('pays_dorigine', null, array('placeholder' => 'pays dorigine','class' => 'form-control')) !!}
            </div>
        </div>

        <div class="col-md-3">
            <div class="form-group">               
                {!! Form::text('destination', null, array('placeholder' => 'destination','class' => 'form-control')) !!}
            </div>
        </div>

          <div class="col-md-3">
            <div class="form-group">               
                {!! Form::text('moyen_transport', null, array('placeholder' => 'moyen transport','class' => 'form-control')) !!}
            </div>
        </div>

        <div class="col-md-3">
            <div class="form-group">               
                {!! Form::text('lieu', null, array('placeholder' => 'lieu','class' => 'form-control')) !!}
            </div>
        </div>

        <div class="col-md-3">
            <div class="form-group">               
                {!! Form::text('date_certificat', null, array('placeholder' => 'date certificat','class' => 'form-control')) !!}
            </div>
        </div>
       <div class="col-md-3">
            <div class="form-group">               
                {!! Form::text('bureau_douane', null, array('placeholder' => 'bureau_douane','class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
               
                {!! Form::text('validite', null, array('placeholder' => 'validite','class' => 'form-control')) !!}
            </div>
        </div>

        <div class="col-md-3">
            <div class="form-group">
                {!! Form::select('exportateur_id' ,App\exportateur::pluck('nom_exportateur' , 'id' ) , null , array('class' => 'form-control', 'placeholder' => 'Entrez exportateur ' , 'multiple' => true )) !!}
			</div>
          </div>

          <div class="col-md-3">
            <div class="form-group">
                 {!! Form::select('controlleur_id' ,App\controlleur::pluck('nom'  , 'id' ) , null , array('class' => 'form-control', 'placeholder' => 'Entrez controlleur ' , 'multiple' => true )) !!}
			</div>
          </div>

        <div class="col-md-3 text-center">
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
            <th>nom emballage</th>
            <th>nom transitairet</th>
            <th>pays dorigine</th>
            <th>destination</th>
            <th>moyen transport</th>  
            <th>lieu</th>
            <th>date certificat</th>
            <th>bureau_douane</th>
            <th>validité</th>  
            <th>exportateur</th>
            <th>controllleur</th>
            <th width="280px">Action</th>
        </tr>
    @foreach ($certificat as $key => $ar)
    <tr>      
        <td>{{ $ar->nom_emballage}}</td>
        <td>{{ $ar->nom_transitaire }}</td>
        <td>{{ $ar->pays_dorigine}}</td>
        <td>{{ $ar->destination }}</td>      
        <td>{{ $ar->moyen_transport}}</td>
        <td>{{ $ar->lieu }}</td>
        <td>{{ $ar->date_certificat}}</td>
        <td>{{ $ar->bureau_douane}}</td>      
        <td>{{ $ar->validite}}</td>
        
        <td>
            <a class="btn btn-primary" href="{{ route('certificat.edit',$ar->id) }}">Edit</a>
            {!! Form::open(['method' => 'DELETE','route' => ['certificat.destroy', $ar->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        </td>
    </tr>
    @endforeach
    </table>

    {!! $certificat->render() !!}


</div>

	</div>
					<!-- /.box-body -->
				</div>
				<!-- /.box -->

			

@endsection
