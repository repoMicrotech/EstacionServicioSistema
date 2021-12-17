<template>
  <main>  <aside>
    <div class="logo">
      <a href="">
        <img :src="'../icons/icono.png'"> GRUPO LOTUS
      </a>
    </div>
    <div class="sidebar">
      <ul>
        <li v-for="menu in datos.menus" :key="menu.id"  class="nav_menu " href="#">
          <a href="#" onclick="return false;">
            <i :class="'mdi mdi-'+menu.icon"></i><p>{{ menu.label }}</p>
          </a>
          <ul :tamano="menu.tamanyo">
          </ul>
        </li>
      </ul>
    </div>
  </aside>
  <section>
    <nav>
      <div class="nav-menu-btn">
        <a onclick="mostrar_aside();">
          <i class="mdi mdi-menu"></i>
        </a>
      </div>
      <div class="nav-search">
        <input type="text" value="" id="input_buscador"  class="form-control buscador" placeholder="Buscar..">
        <button type="button" >
          <i class="mdi mdi-magnify"></i>
        </button>
        <ul id="ul_est">
        </ul>
      </div>
      <div class="nav-log">
        <a onclick="desplegar_log(this);">
          <i class="mdi mdi-account"></i>
        </a>
        <ul>
        </ul>
      </div>
    </nav>
    <router-view></router-view>
  </section>
</main>
</template>
<script>
  export default {
    name:"datos",
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
      }
    }
  }
</script>