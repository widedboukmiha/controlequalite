Vue.http.headers.common['X-CSRF-TOKEN'] = $("#token").attr("value");

new Vue({
  template: '#manage-article',

  data: {
    articles: [],
    pagination: {
        total: 0, 
        per_page: 2,
        from: 1, 
        to: 0,
        current_page: 1
      },
    offset: 4,
    formErrors:{},
    formErrorsUpdate:{},
    newArticle : {'nom':'','prenom':''},
    fillArticle : {'nom':'','prenom':'','id':''}
  },

  computed: {
        isActived: function () {
            return this.pagination.current_page;
        },
        pagesNumber: function () {
            if (!this.pagination.to) {
                return [];
            }
            var from = this.pagination.current_page - this.offset;
            if (from < 1) {
                from = 1;
            }
            var to = from + (this.offset * 2);
            if (to >= this.pagination.last_page) {
                to = this.pagination.last_page;
            }
            var pagesArray = [];
            while (from <= to) {
                pagesArray.push(from);
                from++;
            }
            return pagesArray;
        }
    },

  ready : function(){
  		this.getVueControlleurs(this.pagination.current_page);
  },

  methods : {

        getVueControlleurs: function(page){
          this.$http.get('/navbar?page='+page).then((response) => {
            this.$set('controlleurs', response.data.data.data);
            this.$set('pagination', response.data.pagination);
          });
        },

        createControlleur: function(){
		  var input = this.newControlleur;
		  this.$http.post('/vuecontrolleurs',input).then((response) => {
		    this.changePage(this.pagination.current_page);
			this.newControlleur = {'nom':'','prenom':''};
			$("#create-controlleur").modal('hide');
			toastr.success('Item Created Successfully.', 'Success Alert', {timeOut: 5000});
		  }, (response) => {
			this.formErrors = response.data;
	    });
	},

      deleteControlleur: function(controlleur){
        this.$http.delete('/vuecontrolleurs/'+controlleur.id).then((response) => {
            this.changePage(this.pagination.current_page);
            toastr.success('Item Deleted Successfully.', 'Success Alert', {timeOut: 5000});
        });
      },

      editControlleur: function(controlleur){
          this.fillControlleur.nom = controlleur.nom;
          this.fillControlleur.id = controlleur.id;
          this.fillControlleur.prenom = controlleur.prenom;
          $("#edit-Controlleur").modal('show');
      },

      updateControlleur: function(id){
        var input = this.fillControlleur;
        this.$http.put('/vuecontrolleurs/'+id,input).then((response) => {
            this.changePage(this.pagination.current_page);
            this.fillControlleur = {'nom':'','prenom':'','id':''};
            $("#edit-Controlleur").modal('hide');
            toastr.success('Item Updated Successfully.', 'Success Alert', {timeOut: 5000});
          }, (response) => {
              this.formErrorsUpdate = response.data;
          });
      },

      changePage: function (page) {
          this.pagination.current_page = page;
          this.getVueControlleurs(page);
      }

},}

);