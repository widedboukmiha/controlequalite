
@extends('layouts.default')

@section('content')

    <div class="row">
   <p></p>
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

    {!! Form::open(array('route' => 'analyse.store','method'=>'POST')) !!}
    <div class="row">
  
         
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>nature analyse :</strong>
                {!! Form::text('nature_analyse', null, array('placeholder' => '','class' => 'form-control')) !!}
            </div>
        </div>

          <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>nom analyse :</strong>
                {!! Form::text('nom_analyse', null, array('placeholder' => '','class' => 'form-control')) !!}
            </div>
        </div>

        <div class="col-xs-4">
             <div class="form-group">
                <strong>laboratoire :</strong>
                        {!! Form::select('laboratoires[]',App\laboratoire::pluck('nom_laboratoire' , 'id' ) , null , array('class' => 'form-control', 'placeholder' => 'Entrez les articles ' , 'multiple' => true )) !!}
					
			</div>
        </div>

      

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>

    </div>
    {!! Form::close() !!}

@endsection