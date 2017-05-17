<!DOCTYPE html>
<html>
<head>
	<title>controle qualité</title>
		<meta id="token" name="token" value="{{ csrf_token() }}">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css">

<style >

fieldset.fsStyle {
font-family: Verdana, Arial, sans-serif;
font-size: small;
font-weight: normal;
border: 1px solid #999999;
padding: 4px;
margin: 5px;
}

</style>
</head>
<body>

	<div class="container" id="manage-vue-demande">

		<div class="row">
		    <div class="col-lg-12 margin-tb">
		        <div class="pull-left">
		            <h2>gestion des demandes</h2>

		        </div>

		        <div class="pull-right">
				<button type="button" class="btn btn-success" href="{{ route('demande.create') }}">
				  ajouter demande
				</button>
		        </div>
		    </div>
		</div>

		<!-- Item Listing -->
		<table class="table table-bordered">
			<tr>
				<th>nature_demande</th>
				<th>adresse laboratoire</th>
				<th width="200px">Action</th>
			</tr>
 			
			<tr v-for="demande in demandes" >
				<td>@{{ demande.nature_demande }}</td>
				<td>@{{ demande.date_demande}}</td>
				<td>	
			      <button class="btn btn-primary" @click.prevent="editDemande(demande)">modifier</button>
			      <button class="btn btn-danger" @click.prevent="deleteDemande(demande)">supprimer</button>
				</td>
			</tr>
		</table>
<!-- Pagination -->
		<nav>
	        <ul class="pagination">
	            <li v-if="pagination.current_page > 1">
	                <a href="#" aria-label="Previous"
	                   @click.prevent="changePage(pagination.current_page - 1)">
	                    <span aria-hidden="true">«</span>
	                </a>
	            </li>
	            <li v-for="page in pagesNumber"
 	                v-bind:class="[ page == isActived ? 'active' : '']">
	                <a href="#"
	                   @click.prevent="changePage(page)">@{{page}}</a>
	            </li>
	            <li v-if="pagination.current_page < pagination.last_page">
	                <a href="#" aria-label="Next"
	                   @click.prevent="changePage(pagination.current_page + 1)">
	                    <span aria-hidden="true">»</span>
	                </a>
	            </li>
	        </ul>
	    </nav>

	    <!-- Create Item Modal -->
		<div class="modal fade" id="create-Demande" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
		        <h4 class="modal-title" id="myModalLabel">ajouter demande</h4>
		      </div>
		      <div class="modal-body">

		      		<form method="POST" enctype="multipart/form-data" v-on:submit.prevent="createDemande">

							<div class="form-group">
								<label for="nature_demande">nature demande:</label> <br>								
								<input name="nature_demande" type="radio" value="chargement"   v-model="newDemande.nature_demande">demande de chargement
								<br>
                <input name="nature_demande" type="radio" value="prelevement" v-model="newDemande.nature_demande">demande de prelevement
								<br>
                <input name="nature_demande" type="radio" value="prelevement" v-model="newDemande.nature_demande"> mixte
								<span v-if="formErrors['nature_demande']" class="error text-danger">@{{formErrors['nature_demande'] }}</span>
							</div>
					
							<div class="form-group">
								<label for="date_demande">date demande :</label>
								<input type="date" name="date_demande" class="form-control" v-model="newDemande.date_demande" />
								<span v-if="formErrors['date_demande']" class="error text-danger">@{{formErrors['date_demande']}}</span>
							</div>

							<div class="form-group">
								<button type="submit" class="btn btn-success"  data-toggle="modal" data-target="#create-DemandeChargement">Submit</button>
							</div>

		      		</form>

		        
		      </div>
		    </div>
		  </div>
		</div>


		  <!-- Create demande chargement -->
		<div class="modal fade" id="create-DemandeChargement" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
		        <h4 class="modal-title" id="myModalLabel">ajouter demande chargement</h4>
		      </div>
		      <div class="modal-body">

		      		<form method="POST" enctype="multipart/form-data" v-on:submit.prevent="createDemandeChargement">			
					
							<div class="form-group">
								<label for="date_exportation">date exportation :</label>
								<input type="date" name="date_exportation" class="form-control" v-model="newDemandeChargement.date_exportation" />
								<span v-if="formErrors['date_exportation']" class="error text-danger">@{{formErrors['date_exportation']}}</span>
							</div>

								<div class="form-group">
								<label for="quantite_exportation">quantite_exportation :</label>
								<input type="text" name="quantite_exportation" class="form-control" v-model="newDemandeChargement.quantite_exportation" />
								<span v-if="formErrors['quantite_exportation']" class="error text-danger">@{{formErrors['quantite_exportation']}}</span>
							</div>
				
							<div class="form-group">
								<button type="submit" class="btn btn-success">Submit</button>
							</div>

		      		</form>

		        
		      </div>
		    </div>
		  </div>
		</div>

		<!-- Edit Item Modal -->
		<div class="modal fade" id="edit-Demande" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
		        <h4 class="modal-title" id="myModalLabel">modifier demande</h4>
		      </div>
		      <div class="modal-body">

		      		<form method="POST" enctype="multipart/form-data" v-on:submit.prevent="updateDemande(fillDemande.id)">
		         
						 	<div class="form-group">
								<label for="nature_demande">nature demande:</label>
								<input type="text" name="nature_demande" class="form-control" v-model="fillDemande.nature_demande" />
								<span v-if="formErrors['nature_demande']" class="error text-danger">@{{formErrors['nature_demande'] }}</span>
							</div>
					
							<div class="form-group">
								<label for="date_demande">date demande :</label>
								<input type="date" name="date_demande" class="form-control" v-model="fillDemande.date_demande" />
								<span v-if="formErrors['date_demande']" class="error text-danger">@{{formErrors['date_demande']}}</span>
							</div>


					<div class="form-group">
						<button type="submit" class="btn btn-success">Submit</button>
					</div>

		      		</form>

		      </div>
		    </div>
		  </div>
		</div>

	</div>


	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/js/bootstrap.min.js"></script>

	<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
        <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">

	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.26/vue.min.js"></script>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/vue.resource/0.9.3/vue-resource.min.js"></script>

		<script type="text/javascript" src="/js/demande.js"></script>
		<script type="text/javascript" src="/js/chargement.js"></script>


</body>
</html>