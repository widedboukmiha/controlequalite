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
						<h3 class="box-title">gestion exportateur</h3>

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



             {!! Form::open(array('route' => 'exportateur.store','method'=>'POST')) !!}
                 <fieldset  class="fsStyle">
                    <legend class="legendStyle">ajouter un exportateur :</legend>
                        <div class="row">    
                            <div class="col-md-4">
                                <div class="form-group">
                            
                                    {!! Form::text('nom_exportateur', null, array('placeholder' => 'nom exportateur','class' => 'form-control')) !!}
                                </div>
                            </div>
  
                            <div class="col-md-4">
                                <div class="form-group">
                                
                                    {!! Form::text('adresse_exportateur', null, array('placeholder' => 'adresse exportateur ','class' => 'form-control')) !!}
                                </div>
                            </div>  

                            <div class="col-md-4">
                                <div class="form-group">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>

                        </div>
                     </fieldset>
                {!! Form::close() !!}

              <div class="row">
        
                <p></p>
          </div>
      
        
  
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

       

    <table class="table table-bordered">
        <tr>
            <th>id</th>
            <th>nom exportateur</th>
            <th>adresse exportateur</th>
           
            <th width="280px">Action</th>
        </tr>
    @foreach ($exportateur as $key => $ar)
    <tr>

       
        <td>{{ ++$i }}</td>
      
        <td>{{ $ar->nom_exportateur}}</td>
        <td>{{ $ar->adresse_exportateur}}</td>
 
         <td>
            <a class="btn btn-primary" href="{{ route('exportateur.edit',$ar->id) }}">modifier</a>
            {!! Form::open(['method' => 'DELETE','route' => ['exportateur.destroy', $ar->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        </td>
      
   
        
    </tr>
    @endforeach
    </table>

    {!! $exportateur->render() !!}


</div>

	</div>
					<!-- /.box-body -->
				</div>
				<!-- /.box -->

			

@endsection