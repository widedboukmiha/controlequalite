
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
						<h3 class="box-title">gestion bon refoulements</h3>

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




{!! Form::open(array('route' => 'analyse.store','method'=>'POST')) !!}
       <fieldset  class="fsStyle">
    <legend class="legendStyle">ajouter un analyse :</legend>
    <div class="row">
  
         
        <div class="col-md-4">
            <div class="form-group">
                {!! Form::text('nature_analyse', null, array('placeholder' => 'nature analyse','class' => 'form-control')) !!}
            </div>
        </div>

          <div class="col-md-4">
            <div class="form-group">
                {!! Form::text('nom_analyse', null, array('placeholder' => 'nom analyse','class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-xs-4">
             <div class="form-group">
                <strong>laboratoire :</strong>
                     {!! Form::select('laboratoires[]',App\laboratoire::pluck('nom_laboratoire' , 'id' ) , null , array('class' => 'form-control', 'placeholder' => 'Entrez les articles ' , 'multiple' => true )) !!}
			</div>
        </div>
          

        <div class="col-md-4 text-center">
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
            <th>nature analyse</th>
            <th>nom analyse</th>
            <th>nom laboratoire</th>
          
        </tr>
    @foreach ($analyse as $key => $ar)
    <tr>       
        <td>{{ ++$i }}</td>     
        <td>{{ $ar->nature_analyse }}</td>
        <td>{{ $ar->nom_analyse }}</td>    
   
    </tr>
    @endforeach
    </table>

    {!! $analyse->render() !!}
    </div>

	</div>
					<!-- /.box-body -->
				</div>
				<!-- /.box -->

			

@endsection 