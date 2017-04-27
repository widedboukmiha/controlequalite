import VueRouter from 'vue-router';
let routes=[

	


{
	path:'/example',
	component:require('./components/example')
},


{
	path:'/test',
	component:require('./views/prelevCRUD/test')
},

{
	path:'/prelevCRUD',
	component:require('./views/prelevCRUD/index')
},

{
	path:'/create',
	component:require('./views/prelevCRUD/create')
},

];

export default new VueRouter({
	routes,
	linkActiveClass: 'active'
});