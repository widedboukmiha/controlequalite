 @include('home')
<!DOCTYPE html>
<html>
<head>
	<title>gestion des articles</title>
		<meta id="token" name="token" value="{{ csrf_token() }}">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css">

</head>
<body>

	<div class="container" id="manage-article">

		<div class="row">
		    <div class="col-lg-12 margin-tb">
		        <div class="pull-left">
		            <h2>controlleur CRUD</h2>
		        </div>
		        <div class="pull-right">
				<button type="button" class="btn btn-success" data-toggle="modal" data-target="#create-Article">
				 creer article
				</button>
		        </div>
		    </div>
		</div>

		<!-- Item Listing -->
		<table class="table table-bordered">
			<tr>
				<th>nom</th>
				<th>prenom</th>
				<th width="200px">Action</th>
			</tr>

			
			<tr v-for="controlleur in controlleurs" >
				<td>@{{ controlleur.nom }}</td>
				<td>@{{ controlleur.prenom }}</td>
				<td>	
			      <button class="btn btn-primary" @click.prevent="editArtilce(Artilce)">modifier</button>
			      <button class="btn btn-danger" @click.prevent="deleteArtilce(Artilce)">supprimer</button>
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
		<div class="modal fade" id="create-Controlleur" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
		        <h4 class="modal-title" id="myModalLabel">Create Item</h4>
		      </div>
		      <div class="modal-body">

		      		<form method="POST" enctype="multipart/form-data" v-on:submit.prevent="createControlleur">

		      			<div class="form-group">
						<label for="nom">nom:</label>
						<input type="text" name="nom" class="form-control" v-model="newControlleur.nom" />
						<span v-if="formErrors['nom']" class="error text-danger">@{{formErrors['nom'] }}</span>
					</div>
					
		      		<div class="form-group">
						<label for="prenom">prenom:</label>
						<input type="text" name="prenom" class="form-control" v-model="newControlleur.prenom" />
						<span v-if="formErrors['prenom']" class="error text-danger">@{{formErrors['prenom']}}</span>
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
		<div class="modal fade" id="edit-Controlleur" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
		        <h4 class="modal-title" id="myModalLabel">Edit Item</h4>
		      </div>
		      <div class="modal-body">

		      		<form method="POST" enctype="multipart/form-data" v-on:submit.prevent="updateArtilce(fillArtilce.id)">

		      			<div class="form-group">
						<label for="nom">prenom:</label>
						<input type="text" name="nom" class="form-control" v-model="fillArtilce.nom" />
						<span v-if="formErrorsUpdate['nom']" class="error text-danger">@{{ formErrorsUpdate['nom'] }}</span>
					</div>

				  <div class="form-group">
						<label for="prenom">prenom:</label>
						<input type="text" name="prenom" class="form-control" v-model="fillArtilce.prenom" />
						<span v-if="formErrorsUpdate['prenom']" class="error text-danger">@{{ formErrorsUpdate['prenom'] }}</span>
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

		<script type="text/javascript" src="/js/article.js"></script>


</body>
</html>