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



      {!! Form::open(array('route' => 'bonrefoulement.store' , 'method'=>'POST')) !!}
         <fieldset  class="fsStyle">
    <legend class="legendStyle">ajouter Bon refoulement :</legend>
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                {!! Form::text('date_refoulement', null, array('placeholder' => 'date refoulement','class' => 'form-control')) !!}
            </div>
        </div>

          <div class="col-md-4">
            <div class="form-group">
                {!! Form::text('motif_refoulement', null, array('placeholder' => 'motif refoulement','class' => 'form-control')) !!}
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
       
            <th>tdate refoulement</th>
            <th>motif bonrefoulement</th>
            <th width="280px">Action</th>
        </tr>
    @foreach ($bonrefoulement as $key => $ar)
    <tr>
        <td>{{ ++$i }}</td>  
        <td>{{ $ar->date_refoulement }}</td>
        <td>{{ $ar->motif_refoulement }}</td>   
        <td>
              <a class="btn btn-primary" href="{{ route('bonrefoulement.edit',$ar->id) }}">Edit</a>
            {!! Form::open(['method' => 'DELETE','route' => ['bonrefoulement.destroy', $ar->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
              </td>
    </tr>
    @endforeach
    </table>

    {!! $bonrefoulement->render() !!}

</div>

	</div>
					<!-- /.box-body -->
				</div>
				<!-- /.box -->

			

@endsection
