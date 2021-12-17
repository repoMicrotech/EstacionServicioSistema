<template>
	<div class="content">
		<div class="card">
			<div class="card-header primary-low">
				<h5 class="card-title">Menus</h5>
				{{datos.user}}
			</div>
			<div class="card-body">
				<div class="table-responsive">
					<table class="table table-hover">
						<thead>
							<th>Id</th>
							<th>Code</th>
							<th>Label</th>
							<th>Orden</th>
							<th>Icon</th>
							<th>Editar</th>
							<th>Borrar</th>
						</thead>
						<tbody>
							<tr v-for="menu in datos.menus" :key="menu.id">
								<td>{{menu.id}}</td>
								<td>{{menu.code}}</td>
								<td>{{menu.label}}</td>
								<td>{{menu.orden}}</td>
								<td><i :class="'mdi mdi-'+menu.icon"></i></td>
								<td>
									<router-link :to='{name:"editarMenu",params:{id:menu.id}}' class="btn-min primary">Editar</router-link>
								</td>
								<td>
									<a type="button" @click="borrar(menu.id)" class="btn-min danger" href="">Eliminar</a>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</template>
<script>
	export default {
		name:"menus",
		data(){
			return{
				datos:[]
			}
		},
		mounted(){
			this.mostrarMenus()
		},
		methods:{
			async mostrarMenus(){
				await this.axios.get('/api/admin/menu')
				.then(response=>{this.datos = response.data})
				.catch(error=>{this.menu = []})
			},
			borrar(id){
				if(confirm("Desea eliminar este registro?")){
					this.axios.delete('/api/admin/menu/'+id)
					.then(response=>{this.mostrarMenus})
					.catch(error=>{console})
				}
			}
		}
	}
</script>