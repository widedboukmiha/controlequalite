<nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">OCT</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              {{-- <li class="active"><a href="#">Home</a></li>
              <li><a href="#">Gestion des Demandes </a></li>
              <li><a href="#">Gestion des procès-verbeaux </a></li> 
                <li><a href="#">Gestion des certificats  </a></li>
                  <li><a href="#">Gestion des bons de refoulement </a></li>
                   <li><a href="#">Gestion des factures </a></li>--}}
               <router-link to="/" tag='li' exact>
                <a>Home</a> 
               </router-link>
               <router-link to="/demande" tag='li'>
                  <a>Gestion des Demandes</a> 
               </router-link>

               <router-link to="/proces" tag='li'>
                  <a>Gestion des procès-verbeaux</a> 
               </router-link>
              
                <router-link to="/certificat" tag='li'>
                  <a>Gestion des certificats</a> 
               </router-link>
                <router-link to="/bonsrefoul" tag='li'>
                  <a>Gestion des bons de refoulement</a> 
               </router-link>
               <router-link to="/facture" tag='li'>
                  <a>Gestion des factures</a> 
               </router-link>
               <router-link to="/login" tag='li'>
                  <a>Login</a> 
               </router-link>
               <router-link to="/register" tag='li'>
                  <a>Register</a> 
               </router-link>

               <li>
                <a href="/logout">Logout</a>
               </li>
             
            </ul>
           
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>