<!DOCTYPE html>
<html>
<head>
	<title>controle qualité</title>
		<meta id="token" name="token" value="{{ csrf_token() }}">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css">
<style>
body {
  padding-top: 50px;
}
legend a {
  color: inherit;
}
legend.legendStyle {
padding-left: 5px;
padding-right: 5px;
}
fieldset.fsStyle {
font-family: Verdana, Arial, sans-serif;
font-size: small;
font-weight: normal;
border: 1px solid #999999;
padding: 4px;
margin: 5px;
}
legend.legendStyle {
font-size: 90%;
color: #888888;
background-color: transparent;
font-weight: bold;
}

legend {
width: auto;
border-bottom: 0px;
}

.dropdown-menu {width: 100%;
position: fixed;
top: 50px;
left: 0;
z-index: 1000;
display: none;
float: left;
min-width: 160px;
padding: 5px 0;
margin: 0 auto;

text-align:left;
}

.dropdown-menu li {display:inline-block;}

.dropdown-menu li.dropdown .dropdown-menu {top:210px;}


.dropdown-menu li.dropdown {background:url(http://decombh.org/img/nav_down.png) no-repeat bottom right !important;
background-position: 5px 9px !important;
}
</style>
</head>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>ajouter une  demande</h2>
            </div>
            <div class="pull-right">
            </div>
        </div>
    </div>

    {!! Form::open(array('method'=>'POST' , 'route' => 'demande.store')) !!}

 <fieldset class="fsStyle">
			
				
				
					<legend class="legendStyle">
                      <a data-toggle="collapse" data-target="#demo" href="#">demande</a>
					</legend>
       
					<div class="row collapse in" id="demo">
							<div class="col-md-2">
								<label  class="labelStyle">nature demande:</label>
							</div>

							<div class="col-md-4">
	          				  <input name="nature_demande" type="radio" value="chargement" id ="chargement">demande de chargement
								<br>
             				   <input name="nature_demande" type="radio" value="prelevement" id="prelevement">demande de prelevement
								<br>
             				   <input name="nature_demande" type="radio" value="prelevement" id ="mixte"> mixte
							</div>
                   </div>
<br>
                   	<div class="row collapse in" id="demo">
							<div class="col-md-2">
								<label  class="labelStyle">date demande:</label>
							</div>
							<div class="col-md-4">
								<input name="date_demande" maxlength="10" size="11" tabindex="59" value="" class="textInput" id="date_demande" type="text">
							</div>

							         <div class="col-md-4">
            <div class="form-group">
                        {!! Form::select('exportateur_id' ,App\exportateur::pluck('nom_exportateur' , 'id' ) , null , array('class' => 'form-control', 'placeholder' => 'Entrez exportateur ' , 'multiple' => true )) !!}
			</div>
          </div>

          <div class="col-md-4">
            <div class="form-group">
                        {!! Form::select('controlleur_id' ,App\controlleur::pluck('nom'  , 'id' ) , null , array('class' => 'form-control', 'placeholder' => 'Entrez controlleur ' , 'multiple' => true )) !!}
			</div>
          </div>
                   </div>
  </fieldset>


<br>
 			<fieldset class="fsStyle">
					<legend class="legendStyle">
                      <a data-toggle="collapse" data-target="#demo" href="#">demande de chargement</a>
					</legend>
					<div class="row collapse in" id="demo">
							<div class="col-md-2">
								<label  class="labelStyle">date exportation:</label>
							</div>
							<div class="col-md-4">
								<input name="date_exportation" maxlength="10" size="11" tabindex="59" value="" class="textInput" id="date_exportation" type="text" >
							</div>   
								<br>
                            <div class="col-md-2">
								<label class="labelStyle">Quantite:</label>
							</div>
							<div class="col-md-4">
								<input name="quantite_exportation" maxlength="10" size="11" tabindex="59" value="" class="textInput" id="quantite_exportation" type="text">
							</div>                          
                     </div>
                     	
 		 </fieldset>
								<br>

  		<fieldset class="fsStyle">
					<legend class="legendStyle">
                      <a data-toggle="collapse" data-target="#demo" href="#">demande de prélevement</a>
					</legend>
                    
					<div class="row collapse in" id="demo">
							<div class="col-md-2">
								<label  class="labelStyle">date pv :</label>
							</div>
							<div class="col-md-4">
								<input name="date_pv" maxlength="10" size="11" tabindex="59" value="" class="textInput" id="date_pv" type="text">
							</div>  
									<br>
                            <div class="col-md-2">
								<label  class="labelStyle">nombre d'article:</label>
							</div>
							<div class="col-md-4">
								<input name="nombre_article" maxlength="10" size="11" tabindex="59" value=""class="textInput" id="nombre_article" type="text">
							</div>                           
                     </div>
					<div class="row collapse in" id="demo">
							<div class="col-md-2">
								<label  class="labelStyle">nombre d'échontillon:</label>
							</div>
							<div class="col-md-4">
								<input name="nombre_echantillon" maxlength="10" size="11" tabindex="59" value=""  class="textInput" id="nombre_echantillon" type="text">
							</div> 
                            <br>  
                            <div class="col-md-2">
								<label class="labelStyle">observation:</label>
							</div>
							<div class="col-md-4">
								<input name="observation" maxlength="10" size="11" tabindex="59" value="" class="textInput" id="observation" type="text">
							</div>                          
                     </div>
                    
                     	<div class="row collapse in" id="demo">
							<div class="col-md-2">
								<label  class="labelStyle">numéro bordereau:</label>
							</div>

							<div class="col-md-4">
								<input name="num_bordereau_envoi" maxlength="10" size="11" tabindex="59" value=""  class="textInput" id="num_bordereau_envoi" type="text">
							</div> 
											<br>
                        
                     
  			</fieldset>



        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>


	    {!! Form::close() !!}

		</div>

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
 
</body>
</html>