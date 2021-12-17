const Home = () => import('./components/Home.vue')

const Menu_Crear = () => import('./components/menu/Crear.vue')
const Menu_Editar = () => import('./components/menu/Editar.vue')
const Menu_Mostrar = () => import('./components/menu/Mostrar.vue')

export const routes = [
	{
		name : 'home',
		path : 'home',
		component : Home
	},
	{
		name : 'crearMenu',
		path : '/admin/menu/create',
		component : Menu_Crear
	},
	{
		name : 'editarMenu',
		path : '/admin/menu/edit/:id',
		component : Menu_Editar
	},
	{
		name : 'mostrarMenus',
		path : '/admin/menu',
		component : Menu_Mostrar
	},
]