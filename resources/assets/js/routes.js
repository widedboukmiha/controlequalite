import VueRouter from 'vue-router';
let routes=[

	
{
	path:'/example',
	component:require('./components/example')
},

];

export default new VueRouter({
	routes,
	linkActiveClass: 'active'
});