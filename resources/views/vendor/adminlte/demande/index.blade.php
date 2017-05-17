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
						<h3 class="box-title">gestion demande</h3>

						<div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
								<i class="fa fa-minus"></i></button>
							<button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
								<i class="fa fa-times"></i></button>
						</div>
					</div>
					<div class="box-body">

    <div class="row"> <p></p>     </div>



 

    {!! Form::open(array('route' => 'demande.store' 'method'=>'POST' )) !!}

 <fieldset class="fsStyle">
			
				
				
					<legend class="legendStyle">
                      <a data-toggle="collapse" data-target="#demo" href="#">demande</a>
					</legend>
       
					<div class="row collapse in" id="demo">
							<div class="col-md-3">
								<label  class="labelStyle">nature demande:</label>
							</div>

							<div class="col-md-6">
	          				  <input name="nature_demande" type="radio" value="chargement" id ="chargement">demande de chargement
								
             				   <input name="nature_demande" type="radio" value="prelevement" id="prelevement"> -----  demande de prelevement
								
             				   <input name="nature_demande" type="radio" value="prelevement" id ="mixte">   ------    mixte
							</div>


                      
                   </div>

                 <div class="col-md-3">
								<label  class="labelStyle">date demande:</label>
							</div>
							<div class="col-md-4">
								<input name="date_demande" maxlength="10" size="11" tabindex="59" value="" class="textInput" id="date_demande" type="text">
				</div>
</div>
                <br>
		
                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
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
            <th>No</th>
      
            <th>nature demande</th>
            <th>date demande</th>
            <th width="280px">Action</th>
        </tr>
    @foreach ($demande as $key => $dem)
    <tr>
        <td>{{ ++$i }}</td>
   
        <td>{{ $dem->nature_demande }}</td>
        <td>{{ $dem->date_demande }}</td>
        <td>
            <a class="btn btn-info" href="">demande traité</a>

           @if ($demandes->nature_demande == 'chargement') 

              <a class="btn btn-success" href="{{ route('demande.create') }}"> ajouter demande</a> 

                    
            @endif
        </td>
    </tr>
    @endforeach
    </table>

    {!! $demande->render() !!}



</div>

	</div>
				</div>

			

@endsection
		<script>

// 		       chargement =  document.getElementById("chargement");
// 		       prelevement =  document.getElementById("prelevement");
// 		       mixte =  document.getElementById("mixte");

//        function disabled() {
		
//                     document.getElementById("date_exportation").disabled = true;
// 		            document.getElementById("quantite_exportation").disabled = true;
// 					document.getElementById("date_pv").disabled = true;
// 					document.getElementById("nombre_article").disabled = true;
// 					document.getElementById("nombre_echantillon").disabled = true;
// 					document.getElementById("observation").disabled = true;
// 					document.getElementById("num_bordereau_envoi").disabled = true;
// 	   }

	   
//        function undisabled() {
		
//                     document.getElementById("date_exportation").disabled = false;
// 		            document.getElementById("quantite_exportation").disabled = false;
// 					document.getElementById("date_pv").disabled = false;
// 					document.getElementById("nombre_article").disabled = false;
// 					document.getElementById("nombre_echantillon").disabled = false;
// 					document.getElementById("observation").disabled = false;
// 					document.getElementById("num_bordereau_envoi").disabled = false;
// 	   }


// 		      //demande chargement  
		    

// 				if ( chargement.checked = true) {
                    
//             		  disabled();
// 				}

// 				else {
//        					undisabled();

// 				}

// // demande prelevement

// 				if ( prelevement.checked = true) {                    
// 					    disabled();
// 				}


// 				else {
// 						undisabled();
// 				}		



		</script>
